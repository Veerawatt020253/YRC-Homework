<?php session_start();

include('./config/conn-mysqli.php');

$user_id = $_SESSION['id'];

$sql = "SELECT * FROM member WHERE id=$user_id";
$result = $connect->query($sql);
$row = mysqli_fetch_array($result);
$num = $result->num_rows;

$o_password = $row['password'];
$no_password = $_POST['password'];
$nn_password = $_POST['n-password'];
if ($o_password == $no_password) {
    $password = $nn_password;
} else {
    $password = $o_password;
}


$sql = "UPDATE member SET 
			name = '" . $_POST["name"] . "' ,
			surname = '" . $_POST["surname"] . "' ,
			username = '" . $_POST["username"] . "' ,
			password = '" . $password . "' 
			WHERE id = '" . $user_id . "' ";

$query = mysqli_query($connect, $sql);

if ($query) {
     header("Location: ./index.php");
} else {
    echo "Error Save [" . $sql . "]";
}

mysqli_close($connect);
