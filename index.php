<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoMarketer - Website Marketing Automation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<style>
    :root {
    --primary-color: #4361ee;
    --secondary-color: #3f37c9;
    --accent-color: #4895ef;
    --light-color: #f8f9fa;
    --dark-color: #212529;
    --success-color: #4cc9f0;
    --warning-color: #f72585;
    --border-radius: 8px;
    --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background-color: #f5f7fa;
    color: var(--dark-color);
    line-height: 1.6;
}

.container {
    display: grid;
    grid-template-columns: 250px 1fr;
    min-height: 100vh;
}

header {
    background-color: white;
    padding: 1.5rem;
    box-shadow: var(--box-shadow);
    position: fixed;
    width: 250px;
    height: 100vh;
}

.logo {
    display: flex;
    align-items: center;
    margin-bottom: 2rem;
}

.logo i {
    font-size: 1.8rem;
    color: var(--primary-color);
    margin-right: 0.8rem;
}

.logo h1 {
    font-size: 1.5rem;
    font-weight: 600;
}

nav ul {
    list-style: none;
}

nav ul li {
    margin-bottom: 1rem;
}

nav ul li a {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: var(--dark-color);
    padding: 0.6rem 1rem;
    border-radius: var(--border-radius);
    transition: all 0.3s ease;
}

nav ul li a:hover {
    background-color: #f0f2f5;
    color: var(--primary-color);
}

nav ul li a.active {
    background-color: #e6f0ff;
    color: var(--primary-color);
    font-weight: 500;
}

nav ul li a i {
    margin-right: 0.8rem;
    font-size: 1.1rem;
}

main {
    grid-column: 2;
    padding: 2rem;
}

section {
    background-color: white;
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
    padding: 1.5rem;
    margin-bottom: 2rem;
}

h2 {
    font-size: 1.3rem;
    margin-bottom: 1.5rem;
    color: var(--dark-color);
    display: flex;
    align-items: center;
}

h2 i {
    margin-right: 0.8rem;
    color: var(--primary-color);
}

h3 {
    font-size: 1.1rem;
    margin-bottom: 1rem;
    color: var(--dark-color);
}

.input-group {
    margin-bottom: 1.5rem;
}

.input-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 500;
    display: flex;
    align-items: center;
}

.input-group label i {
    margin-right: 0.5rem;
    color: var(--primary-color);
}

.input-group input[type="url"],
.input-group input[type="text"],
.input-group textarea {
    width: 100%;
    padding: 0.8rem 1rem;
    border: 1px solid #ddd;
    border-radius: var(--border-radius);
    font-family: inherit;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.input-group input[type="url"]:focus,
.input-group input[type="text"]:focus,
.input-group textarea:focus {
    outline: none;
    border-color: var(--primary-color);
}

.input-group textarea {
    min-height: 120px;
    resize: vertical;
}

.platform-options {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    gap: 1rem;
}

.platform-checkbox {
    display: flex;
    align-items: center;
    padding: 0.8rem 1rem;
    background-color: #f8f9fa;
    border-radius: var(--border-radius);
    cursor: pointer;
    transition: all 0.3s ease;
}

.platform-checkbox:hover {
    background-color: #e9ecef;
}

.platform-checkbox input {
    margin-right: 0.8rem;
    cursor: pointer;
}

.platform-checkbox i {
    margin-right: 0.5rem;
    font-size: 1.2rem;
}

.action-buttons {
    display: flex;
    gap: 1rem;
    margin-top: 1.5rem;
}

.btn-primary, .btn-secondary, .btn-small {
    padding: 0.8rem 1.5rem;
    border: none;
    border-radius: var(--border-radius);
    font-family: inherit;
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.btn-primary {
    background-color: var(--primary-color);
    color: white;
}

.btn-primary:hover {
    background-color: var(--secondary-color);
}

.btn-secondary {
    background-color: white;
    color: var(--primary-color);
    border: 1px solid var(--primary-color);
}

.btn-secondary:hover {
    background-color: #f0f2f5;
}

.btn-small {
    padding: 0.5rem 1rem;
    font-size: 0.9rem;
}

.btn-small i {
    margin-right: 0.5rem;
}

.preview-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
}

.image-preview {
    position: relative;
}

.image-preview img {
    width: 100%;
    height: auto;
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
}

.image-actions {
    position: absolute;
    bottom: 1rem;
    right: 1rem;
    display: flex;
    gap: 0.5rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 500;
}

.schedule-options {
    display: flex;
    gap: 1rem;
    align-items: center;
}

.schedule-options input {
    padding: 0.8rem;
    border: 1px solid #ddd;
    border-radius: var(--border-radius);
    font-family: inherit;
}

.stats-summary {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.stat-card {
    background-color: #f8f9fa;
    padding: 1.5rem;
    border-radius: var(--border-radius);
    text-align: center;
}

.stat-card h3 {
    font-size: 1rem;
    color: #6c757d;
    margin-bottom: 0.5rem;
}

.stat-value {
    font-size: 1.8rem;
    font-weight: 600;
    color: var(--primary-color);
}

.history-table {
    width: 100%;
    border-collapse: collapse;
}

.history-table th, .history-table td {
    padding: 1rem;
    text-align: left;
    border-bottom: 1px solid #eee;
}

.history-table th {
    font-weight: 600;
    color: var(--dark-color);
}

.history-table tr:hover {
    background-color: #f8f9fa;
}

.history-table i {
    margin-right: 0.5rem;
}

@media (max-width: 1024px) {
    .container {
        grid-template-columns: 1fr;
    }
    
    header {
        position: static;
        width: 100%;
        height: auto;
    }
    
    main {
        grid-column: 1;
    }
    
    .preview-container {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .stats-summary {
        grid-template-columns: 1fr;
    }
    
    .platform-options {
        grid-template-columns: 1fr 1fr;
    }
}
    </style>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <i class="fas fa-robot"></i>
                <h1>AutoMarketer</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#" class="active"><i class="fas fa-home"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fas fa-history"></i> History</a></li>
                    <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
                    <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <section class="input-section">
                <h2>Create New Marketing Post</h2>
                <div class="input-group">
                    <label for="website-url"><i class="fas fa-link"></i> Website URL</label>
                    <input type="url" id="website-url" placeholder="https://example.com">
                </div>

                <div class="platform-selection">
                    <h3><i class="fas fa-share-alt"></i> Select Platforms</h3>
                    <div class="platform-options">
                        <label class="platform-checkbox">
                            <input type="checkbox" name="platform" value="facebook" checked>
                            <i class="fab fa-facebook"></i> Facebook
                        </label>
                        <label class="platform-checkbox">
                            <input type="checkbox" name="platform" value="instagram" checked>
                            <i class="fab fa-instagram"></i> Instagram
                        </label>
                        <label class="platform-checkbox">
                            <input type="checkbox" name="platform" value="twitter">
                            <i class="fab fa-twitter"></i> Twitter
                        </label>
                        <label class="platform-checkbox">
                            <input type="checkbox" name="platform" value="linkedin">
                            <i class="fab fa-linkedin"></i> LinkedIn
                        </label>
                    </div>
                </div>

                <div class="action-buttons">
                    <button id="generate-content" class="btn-primary">
                        <i class="fas fa-magic"></i> Generate Content
                    </button>
                    <button id="generate-image" class="btn-secondary">
                        <i class="fas fa-image"></i> Generate Image
                    </button>
                </div>
            </section>

            <section class="preview-section">
                <h2><i class="fas fa-eye"></i> Post Preview</h2>
                <div class="preview-container">
                    <div class="image-preview">
                        <img id="generated-image" src="https://via.placeholder.com/600x400" alt="Generated content">
                        <div class="image-actions">
                            <button id="regenerate-image" class="btn-small">
                                <i class="fas fa-sync-alt"></i> Regenerate
                            </button>
                            <button id="upload-image" class="btn-small">
                                <i class="fas fa-upload"></i> Upload
                            </button>
                        </div>
                    </div>
                    <div class="text-preview">
                        <div class="form-group">
                            <label for="post-headline">Headline</label>
                            <input type="text" id="post-headline" value="Discover Amazing Features on Our Website!">
                        </div>
                        <div class="form-group">
                            <label for="post-caption">Caption</label>
                            <textarea id="post-caption">Check out these incredible features on our website that will transform your experience. Click the link to learn more! #webdesign #innovation #tech</textarea>
                        </div>
                        <div class="form-group">
                            <label for="post-hashtags">Hashtags</label>
                            <input type="text" id="post-hashtags" value="#webdesign #innovation #tech #digitalmarketing">
                        </div>
                        <div class="scheduling">
                            <label for="schedule-post">Schedule Post</label>
                            <div class="schedule-options">
                                <input type="datetime-local" id="schedule-post">
                                <button id="post-now" class="btn-primary">
                                    <i class="fas fa-paper-plane"></i> Post Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="history-section">
                <h2><i class="fas fa-chart-line"></i> Post History & Analytics</h2>
                <div class="history-container">
                    <div class="stats-summary">
                        <div class="stat-card">
                            <h3>Total Posts</h3>
                            <p class="stat-value">24</p>
                        </div>
                        <div class="stat-card">
                            <h3>Engagement Rate</h3>
                            <p class="stat-value">8.2%</p>
                        </div>
                        <div class="stat-card">
                            <h3>Best Platform</h3>
                            <p class="stat-value">Instagram</p>
                        </div>
                    </div>
                    <table class="history-table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Platform</th>
                                <th>Content</th>
                                <th>Engagement</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023-06-15</td>
                                <td><i class="fab fa-instagram"></i> Instagram</td>
                                <td>Summer Sale Announcement</td>
                                <td>4.8%</td>
                                <td><button class="btn-small"><i class="fas fa-redo"></i> Repost</button></td>
                            </tr>
                            <tr>
                                <td>2023-06-10</td>
                                <td><i class="fab fa-facebook"></i> Facebook</td>
                                <td>New Feature Launch</td>
                                <td>6.2%</td>
                                <td><button class="btn-small"><i class="fas fa-redo"></i> Repost</button></td>
                            </tr>
                            <tr>
                                <td>2023-06-05</td>
                                <td><i class="fab fa-twitter"></i> Twitter</td>
                                <td>Website Update</td>
                                <td>3.5%</td>
                                <td><button class="btn-small"><i class="fas fa-redo"></i> Repost</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

    <script src="/js/script.js"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website Marketing Tool</title>
    <style>
        body { font-family: Arial; margin: 40px; background: #f4f4f4; }
        h1 { color: #333; }
        form { background: #fff; padding: 20px; border-radius: 5px; max-width: 500px; }
        input, button { padding: 10px; margin: 10px 0; width: 100%; }
        #result { background: #eaeaea; padding: 15px; border-radius: 5px; margin-top: 20px; }
        img { max-width: 100%; margin-top: 10px; }
    </style>
</head>
<body>
    <h1>Website Marketing Tool</h1>
    <form id="marketingForm">
        <label for="website_url">Enter Website URL:</label>
        <input type="url" id="website_url" name="website_url" required>

        <label for="image_selection">Select Image (or Upload):</label>
        <input type="file" id="image_selection" name="image_selection">

        <button type="submit">Generate Marketing Content</button>
    </form>
    <div id="result"></div>

    <script>
        document.getElementById('marketingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const url = document.getElementById('website_url').value;
            const formData = new FormData();
            formData.append('website_url', url);
            formData.append('image_selection', document.getElementById('image_selection').files[0]);

            fetch('submit_website.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                let resultHTML = '<strong>Generated Post:</strong><br>' + data.content;
                if (data.image_url) {
                    resultHTML += '<br><strong>Generated Image:</strong><br><img src="' + data.image_url + '" alt="Generated Image">';
                }
                document.getElementById('result').innerHTML = resultHTML;
            })
            .catch(error => {
                document.getElementById('result').innerHTML = 'Error: ' + error;
            });
        });
    </script>
</body>
</html>
