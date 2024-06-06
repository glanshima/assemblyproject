<?php
// Database connection (modify as needed)
/* $hostname = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$dbname = "your_database_name";

try {
$conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo "Database connection failed: " . $e->getMessage();
} */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if files were uploaded
    if (!empty($_FILES["upload"]["name"][0])) {
        $uploadDir = "uploads/"; // Directory to store uploaded files

        foreach ($_FILES["upload"]["tmp_name"] as $key => $tmpName) {
            $fileName = $_FILES["upload"]["name"][$key];
            $filePath = $uploadDir . $fileName;

            // Move uploaded file to the server
            move_uploaded_file($tmpName, $filePath);

            // Insert file path into the database
          /*   $sql = "INSERT INTO user (images, date_time) VALUES (:images, NOW())";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":images", $filePath);
            $stmt->execute(); */
        }

        echo "Files uploaded successfully!";
    } else {
        echo "No files selected.";
    }
}