<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = $_POST['website_url'];

    // Image upload handling (if provided)
    $image_url = null;
    if (!empty($_FILES['image_selection']['name'])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image_selection"]["name"]);
        if (move_uploaded_file($_FILES["image_selection"]["tmp_name"], $target_file)) {
            $image_url = $target_file;
        }
    } else {
        // Fetch image using Unsplash API
        $unsplash_api_key = 'YOUR_UNSPLASH_API_KEY'; // Replace with your actual Unsplash API key
        $unsplash_url = 'https://api.unsplash.com/photos/random?query=marketing&client_id=' . $unsplash_api_key;

        // cURL request to Unsplash API
        $ch = curl_init($unsplash_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $image_response = curl_exec($ch);
        curl_close($ch);

        if ($image_response === false) {
            echo "Error fetching image from Unsplash API"; // Debugging line
            exit;
        }

        $image_data = json_decode($image_response, true);
        if ($image_data && isset($image_data[0]['urls']['regular'])) {
            $image_url = $image_data[0]['urls']['regular']; // Get the image URL from the API response
        } else {
            echo "No image found in API response"; // Debugging line
            exit;
        }
    }

    // Prepare AI content prompt
    $prompt = "Write a catchy promotional post for this website: $url";

    // Call OpenAI API for content generation
    $ch = curl_init('https://api.openai.com/v1/completions');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
        "Authorization: Bearer $openai_api_key" // Replace with your OpenAI API key
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
        "model" => "text-davinci-003",
        "prompt" => $prompt,
        "max_tokens" => 100
    ]));

    $response = curl_exec($ch);
    $data = json_decode($response, true);
    curl_close($ch);

    $generated_text = $data['choices'][0]['text'];

    // Save to DB
    $stmt = $conn->prepare("INSERT INTO posts (website_url, content, image_url) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $url, $generated_text, $image_url);
    $stmt->execute();

    echo json_encode([
        'status' => 'success',
        'content' => $generated_text,
        'image_url' => $image_url
    ]);
}
?>