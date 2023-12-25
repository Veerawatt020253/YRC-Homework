<?php
include '../config/conn-mysqli.php';
$table = $_GET['table'];
// prepare and bind
$stmt = $connect->prepare("DELETE FROM $table WHERE id=?");
$stmt->bind_param("i", $id);
/*
The argument may be one of four types:
i - integer
d - double
s - string
b - BLOB
*/

$id = $_GET['id'];
$stmt->execute();
 
 
if($stmt->error){
	echo $stmt->error;
}else{
	echo "<script>location.href='admin.php'</script>";
}
 
 
$stmt->close();
$connect->close();
 
?>