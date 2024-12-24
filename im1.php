<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="uploadfile"><br><br><br>
        <input type="submit" name="submit" value="Upload">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_FILES['uploadfile'])) {
            $folder = "images/"; // Make sure this folder exists and is writable
            $file_path = $folder . basename($_FILES["uploadfile"]["name"]);
            $filename=$_FILES["uploadfile"]["name"];
            $tempname=$_FILES["uploadfile"]["tmp_name"];
            $imgpath="images/".$filename;

            // Display the uploaded file information
            // echo "<pre>";
            // print_r($_FILES['uploadfile']);
            // echo "</pre>";

            // Move the uploaded file to the desired folder
            move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $file_path);
        }}

    echo "<img src='images/$filename' height='100px' width='100px' >";

    ?>
 


</body>
</html>
