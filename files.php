<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="upload-">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="upload[]" multiple>
            <input type="submit" value="Upload">
        </form>
    </div>
</body>

</html>