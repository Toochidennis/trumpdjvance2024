<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_uploads";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";
$error = "";

// Check if the form is submitted
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';

    $video_url = '';
    if (isset($_FILES['video_url']) && $_FILES['video_url']['error'] == UPLOAD_ERR_OK) {
        $video_url = 'uploads/videos/' . basename($_FILES['video_url']['name']);
        move_uploaded_file($_FILES['video_url']['tmp_name'], $video_url);
    }

    $image_url = '';
    if (isset($_FILES['image_url']) && $_FILES['image_url']['error'] == UPLOAD_ERR_OK) {
        $image_url = 'uploads/images/' . basename($_FILES['image_url']['name']);
        move_uploaded_file($_FILES['image_url']['tmp_name'], $image_url);
    }


    $stmt = $conn->prepare("INSERT INTO videos (title, description, video_url, image_url) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $description, $video_url, $image_url);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Video</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <?php if ($message): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
    <?php if ($error): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>
</div>
</body>
</html>
