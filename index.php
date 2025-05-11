<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <h2>Upload File</h2>
    <!-- Form upload file -->
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="fileUpload">Choose a file to upload:</label>
        <input type="file" name="fileToUpload" id="fileUpload">
        <br><br>
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>
