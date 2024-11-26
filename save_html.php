<?php
include 'db_connect.php';  // Database connection
include 'logfile.php';     // Logging function

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get content from CKEditor and additional data
    $content = $conn->real_escape_string($_POST['editor_content']);
    $bio = isset($_POST['bio']) ? $conn->real_escape_string($_POST['bio']) : NULL;
    $image = isset($_FILES['image']['tmp_name']) ? file_get_contents($_FILES['image']['tmp_name']) : NULL;

    // Insert content into the database
    $sql = "INSERT INTO webpages (content, bio, image) VALUES ('$content', '$bio', ?)";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("b", $image);  // Bind the BLOB image
        if ($stmt->execute()) {
            $webpage_id = $stmt->insert_id;
            $log_sql = "INSERT INTO webpage_logs (webpage_id, action) VALUES ($webpage_id, 'create')";
            if ($conn->query($log_sql) === TRUE) {
                logMessage("Webpage created with ID: $webpage_id and content saved.");
            } else {
                logMessage("Error logging action: " . $conn->error);
            }
            echo "<p>Content saved successfully!</p>";
        } else {
            logMessage("Error saving content: " . $stmt->error);
            echo "<p>Error: " . $stmt->error . "</p>";
        }
        $stmt->close();
    }
} else {
    logMessage("Form submission failed - no data received.");
}
$conn->close();
?>
