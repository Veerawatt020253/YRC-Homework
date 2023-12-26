<?php

require_once './config/conn-mysqli.php';

$id = $_GET['id'];
$owner = $_GET['owner'];
$page = $_GET['page'];

$sql = "SELECT * FROM todo WHERE id = '$id' AND owner = '$owner'";
$result = $connect->query($sql);

while ($row = $result->fetch_assoc()) {
    $status = $row['status'];
    if ($status == 'false') {
        $status = 'true';
    } else {
        $status = 'false';
    }
}

echo $status;

$sql = "UPDATE todo SET 
			status = '".$status."'
			WHERE id = '".$id."' ";

            

	$query = mysqli_query($connect,$sql);

	if($query) {
	  header("Location: ./$page");
	} else {
		echo "Error Save [".$sql."]";
	}

?>