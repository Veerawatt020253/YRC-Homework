<?php
session_start(); //ประกาศใช้ session
$_SESSION['id'] = null;
$_SESSION['name'] = null;
$_SESSION['surname'] = null;
header('Location: login.php'); //Logout เรียบร้อยและกระโดดไปหน้าตามที่ต้องการ
//devbanban.com
