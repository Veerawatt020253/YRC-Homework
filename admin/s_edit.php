<?php

include('../config/conn-mysqli.php');

$table = $_POST['table'];

if ($table == "member") {

	$sql = "UPDATE $table SET 
			username = '".$_POST["username"]."' ,
			password = '".$_POST["password"]."' ,
			name = '".$_POST["name"]."' ,
			surname = '".$_POST["surname"]."' ,
			role = '".$_POST["role"]."'
			WHERE id = '".$_POST["id"]."' ";

	$query = mysqli_query($connect,$sql);

	if($query) {
	  header("Location: ./member.php");
	} else {
		echo "Error Save [".$sql."]";
	}

	mysqli_close($connect);
} else if ($table == "homework") {
	$sql = "UPDATE $table SET 
			subject = '".$_POST["subject"]."' ,
			teacher = '".$_POST["teacher"]."' ,
			title = '".$_POST["title"]."' ,
			point = '".$_POST["point"]."' ,
			time = '".$_POST["time"]."'
			WHERE id = '".$_POST["id"]."' ";

	$query = mysqli_query($connect,$sql);

	if($query) {
	  header("Location: ./homework.php");
	} else {
		echo "Error Save [".$sql."]";
	}

	mysqli_close($connect);

}
?>