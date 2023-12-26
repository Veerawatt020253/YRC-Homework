<?php session_start();

date_default_timezone_set("Asia/Bangkok");

require_once './config/conn-mysqli.php';

if (isset($_POST['submit'])) {
    $content = $_POST['content'];
    $owner = $_SESSION['id'];
    $status = 'false';
    $date = date("d/m/Y");

    $sql = "INSERT INTO todo (content, status, owner, time) VALUES ('$content', '$status', '$owner', '$date')";

    if ($connect->query($sql) === TRUE) {
        header("location: ./todo_List.php");
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }

    $connect->close();
}
?>