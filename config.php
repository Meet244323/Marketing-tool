<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marketing_tool";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// OpenAI API Key (replace with your actual key)
$openai_api_key = 'YOUR_OPENAI_API_KEY';
?>
