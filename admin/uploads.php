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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Directory where files will be saved
    $targetDir = "uploads/";

    // Create the uploads directory if it doesn't exist
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Check if the files are uploaded
    if (isset($_FILES["video_url"]) && isset($_FILES["image_url"])) {
        // Check for upload errors
        if ($_FILES["video_url"]["error"] === UPLOAD_ERR_OK && $_FILES["image_url"]["error"] === UPLOAD_ERR_OK) {
            // File paths
            $videoFileName = basename($_FILES["video_url"]["name"]);
            $imageFileName = basename($_FILES["image_url"]["name"]);
            $targetVideoPath = $targetDir . $videoFileName;
            $targetImagePath = $targetDir . $imageFileName;

            // Get file extensions
            $videoFileType = strtolower(pathinfo($targetVideoPath, PATHINFO_EXTENSION));
            $imageFileType = strtolower(pathinfo($targetImagePath, PATHINFO_EXTENSION));

            // Get MIME types
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $videoMimeType = finfo_file($finfo, $_FILES["video_url"]["tmp_name"]);
            $imageMimeType = finfo_file($finfo, $_FILES["image_url"]["tmp_name"]);
            finfo_close($finfo);

            // Valid formats and MIME types
            $validVideoFormats = array("mp4", "avi", "mov", "mpeg");
            $validImageFormats = array("jpg", "jpeg", "png", "gif");
            $validVideoMimeTypes = array("video/mp4", "video/x-msvideo", "video/quicktime", "video/mpeg");
            $validImageMimeTypes = array("image/jpeg", "image/png", "image/gif");

            // Check file size (limit to 500MB)
            if ($_FILES["video_url"]["size"] > 500 * 1024 * 1024) {
                $error = "Sorry, your video file is too large. Maximum file size is 500MB.";
            } elseif (in_array($videoFileType, $validVideoFormats) && in_array($videoMimeType, $validVideoMimeTypes) &&
                in_array($imageFileType, $validImageFormats) && in_array($imageMimeType, $validImageMimeTypes)) {
                // Upload files to server
                if (move_uploaded_file($_FILES["video_url"]["tmp_name"], $targetVideoPath) && move_uploaded_file($_FILES["image_url"]["tmp_name"], $targetImagePath)) {
                    // Insert video information into the database
                    $title = $conn->real_escape_string($_POST['title']);
                    $description = $conn->real_escape_string($_POST['description']);
                    $videoUrl = $conn->real_escape_string($targetVideoPath);
                    $imageUrl = $conn->real_escape_string($targetImagePath);

                    $sql = "INSERT INTO videos (title, description, video_url, image_url) VALUES ('$title', '$description', '$videoUrl', '$imageUrl')";
                    if ($conn->query($sql) === TRUE) {
                        $message = "The file " . htmlspecialchars($videoFileName) . " has been uploaded.";
                    } else {
                        $error = "Error: " . $sql . "<br>" . $conn->error;
                    }
                } else {
                    $error = "Sorry, there was an error uploading your file.";
                }
            } else {
                $error = "Sorry, only MP4, AVI, MOV, MPEG videos and JPG, JPEG, PNG, GIF images are allowed to upload.";
            }
        } else {
            $error = "File upload error: " . $_FILES['video_url']['error'] . " for video or " . $_FILES['image_url']['error'] . " for image.";
        }
    } else {
        $error = "No file uploaded.";
    }
}

$conn->close();
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
