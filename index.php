<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['file']['name']);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Docker PHP Upload File</title>
</head>
<body>
    <h2>Docker PHP Upload File</h2>
    Upload a file
    <form enctype="multipart/form-data" action="" method="POST">
        <p><input type="file" name="file"></p>
        <p><input type="submit" value="Upload"></p>
    </form>
</body>
</html>

