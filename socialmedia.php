<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Social Media Handles</title>
</head>

<body>
    <?php
    // Database connection (modify as needed)
    $hostname = "localhost";
    $username = "your_db_username";
    $password = "your_db_password";
    $dbname = "your_database_name";

    try {
        $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Database connection failed: " . $e->getMessage();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $twitter = $_POST["twitter"];
        $instagram = $_POST["instagram"];
        $linkedin = $_POST["linkedin"];

        // Insert handles into the database
        $sql = "INSERT INTO social_media_handles (twitter, instagram, linkedin) VALUES (:twitter, :instagram, :linkedin)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":twitter", $twitter);
        $stmt->bindParam(":instagram", $instagram);
        $stmt->bindParam(":linkedin", $linkedin);
        $stmt->execute();

        echo "Social media handles inserted successfully!";
    }
    ?>

    <h1>Insert Social Media Handles</h1>
    <form method="post">
        <label for="twitter">Twitter:</label>
        <input type="text" name="twitter" id="twitter"><br>

        <label for="instagram">Instagram:</label>
        <input type="text" name="instagram" id="instagram"><br>

        <label for="linkedin">LinkedIn:</label>
        <input type="text" name="linkedin" id="linkedin"><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>