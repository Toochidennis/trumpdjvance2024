<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_uploads";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, description, video_url, image_url, uploaded_at FROM videos ORDER BY uploaded_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - View Uploaded Videos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Uploaded Videos</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Video</th>
            <th>Image</th>
            <th>Uploaded At</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                            <td>{$row['title']}</td>
                            <td>{$row['description']}</td>
                            <td><video width='320' height='240' controls><source src='{$row['video_url']}' type='video/mp4'>Your browser does not support the video tag.</video></td>
                            <td><img src='{$row['image_url']}' alt='{$row['title']}' width='100'></td>
                            <td>{$row['uploaded_at']}</td>
                        </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No videos found</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php
$conn->close();
?>
