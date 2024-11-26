<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage Builder</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
</head>
<body>
    <div class="container">
        <h1>🌟 Build Your Custom Webpage 🌟</h1>
        <div class="editor-container">
            <form id="htmlForm" action="save_html.php" method="POST" enctype="multipart/form-data">
                <textarea name="editor_content" id="editor"></textarea>
                <br>
                <textarea name="bio" placeholder="Enter bio (optional)"></textarea>
                <br>
                <input type="file" name="image">
                <br>
                <button type="submit" class="btn-submit">Generate Page</button>
            </form>
        </div>
    </div>

    <script>
        CKEDITOR.replace('editor');
    </script>
</body>
</html>
