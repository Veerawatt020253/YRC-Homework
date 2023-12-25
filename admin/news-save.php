<?php 
// Include the database configuration file 
include_once '../config/conn-mysqli.php'; 
 
// File upload directory 
$targetDir = "../uploads/"; 

$title = $_POST['title'];
$decp = $_POST['decp'];
$date = $_POST['date'];
 
if(!empty($_FILES["image"]["tmp_name"])){
    $fileinfo=PATHINFO($_FILES["image"]["name"]);
    $newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
    move_uploaded_file($_FILES["image"]["tmp_name"],"../uploads/" . $newFilename);
    $location="uploads/" . $newFilename;

    mysqli_query($connect,"insert into news (title, decp, img, time) values ('$title','$decp','$location','$date')");
    header('location:news.php');
}else{
    echo "<script>alert('No Image selected.');location.replace('./index.php');</script>";
}

?>