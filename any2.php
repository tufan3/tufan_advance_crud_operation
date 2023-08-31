<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload to Database</title>
</head>

<body>
    <h2>Upload Image to Database</h2>
    <form action="code2.php" method="post" enctype="multipart/form-data">
        <label for="image">Select an image:</label>
        <input type="file" id="image" name="image" accept="image/*" required>
        <br><br>
        <button type="submit">Upload</button>
    </form>
</body>

</html>