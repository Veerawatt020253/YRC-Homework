<?php

include('./config/conn-mysqli.php');

$user_id = $_SESSION['id'];

$sql = "SELECT * FROM member WHERE id=$user_id";
$result = $connect->query($sql);
$row = mysqli_fetch_array($result);
$num = $result->num_rows;

$_SESSION['name'] = $row['name'];
$_SESSION['surname'] = $row['surname'];
$_SESSION['username'] = $row['username'];
$_SESSION['role'] = $row['role'];

?>