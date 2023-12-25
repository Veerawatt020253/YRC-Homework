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

    $sql = "UPDATE news SET 
			title = '".$_POST["title"]."' ,
			decp = '".$_POST["decp"]."' ,
			img = '".$location."' ,
			time = '".$_POST["date"]."' 
			WHERE id = '".$_POST["id"]."' ";

            $query = mysqli_query($connect,$sql);
    header('location:news.php');
}else{
    echo "<script>alert('No Image selected.');location.replace('./news.php');</script>";
}

?>