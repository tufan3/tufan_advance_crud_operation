<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image'])) {
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

        // Insert image into the database
        $sql = "INSERT INTO image (image_data) VALUES ('$image')";

        if ($conn->query($sql) === TRUE) {
            echo "Image uploaded and inserted into database successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "File upload failed.";
    }
}

$conn->close();
?>