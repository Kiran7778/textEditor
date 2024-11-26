 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage Builder</title>
    
    <!-- Link external CSS -->
    <link rel="stylesheet" href="styles.css">
    
    <!-- Include CKEditor from CDN -->
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
</head>
<body>
    <div class="container">
        <h1>🌟 Build Your Custom Webpage 🌟</h1>
        
        <div class="editor-container">
            <form id="htmlForm" action="save_html.php" method="POST">
                <!-- Textarea for CKEditor -->
                <textarea name="editor_content" id="editor"></textarea>
                <br>
                <button type="submit" class="btn-submit">Generate Page</button>
            </form>
        </div>
        
        <!-- Feedback message -->
        <div id="message" class="message hidden"></div>
    </div>

    <!-- Initialize CKEditor -->
    <script>
        CKEDITOR.replace('editor');
    </script>
</body>
</html>

