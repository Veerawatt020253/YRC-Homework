<?php

require_once './config/conn-mysqli.php';

$id = $_GET['id'];
$owner = $_GET['owner'];

$sql = "DELETE FROM todo WHERE id = $id AND owner = $owner"; 
            

if ($connect->query($sql) === TRUE) {
    header("location: ./index.php");
  } else {
    echo "Error deleting record: " . $connect->error;
  }
  
  $connect->close();
?>