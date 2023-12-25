<?php

include('./config/conn-mysqli.php');

date_default_timezone_set("Asia/Bangkok");

$check_device = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));

if($check_device) {
    $device = "mobile";
} else {
    $device = "desktop";
}

$time = date("Y-m-d H:i:s");
$value = $device;

$sql = "INSERT INTO viewer SET 
			time = '".$time."' ,
			value = '".$value."'
			";

	$query = mysqli_query($connect,$sql);

?>