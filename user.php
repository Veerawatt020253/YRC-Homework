<?php

include('./view-c.php');

session_start();

include('./link.php');

require_once "config/conn.php";

$name = $_SESSION['name'];
$surname = $_SESSION['surname'];
$user_id = $_SESSION['id'];
$role = $_SESSION['role'];

$sql = "SELECT * FROM member WHERE id=$user_id";
$result = $connect->query($sql);
$row = mysqli_fetch_array($result);
$num = $result->num_rows;
//echo $num;
//print_r($row);



if ($name == null) {
    $_SESSION['login'] = false;
    $html_login = "d-block";
    $html_name = "d-none";
    // echo $html_login;
    // echo $html_name;
    echo "<script>location.href = '../login.php'</script>";
} else {
    $_SESSION['login'] = true;
    $html_login = "d-none";
    $html_name = "d-block";
    $surname = $_SESSION['surname'];
}

if ($role == "admin") {
    echo '<script>window.location.href = "./admin"</script>';
}

require_once "config/conn-mysqli.php";

$sql = "SELECT * FROM member WHERE id = '$user_id'";
$result = $connect->query($sql);
?>

<!doctype html>
<html lang="en">

<head>
    <title>YRC13 - Homework</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="./Framework/bootstrap/css/bootstrap.min.css">

    <link rel="shortcut icon" href="./img/yrc_logo.png" type="image/png">

    <link rel=”icon” type=”image/png href=”./img/yrc_logo.png” />

    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <?php include_once('./header.php'); ?>
    <main>
        <div class="mt-5 mb-3">

            <?php include('./banner.php'); ?>

            <div class="container mt-3">
                <div class=" border rounded border-2">


                    <div class="row m-0">
                        <div class="col-sm-12 col-lg-6">
                            <h2 class="mt-3">สวัสดี <?php echo $name ?></h2>
                            <form action="update-user.php" method="post">
                                <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="" value="<?php echo $row['name'] ?>" />
                                    <small id="helpId" class="form-text text-muted">คุณสามารถเปลี่ยนชื่อได้</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">surname</label>
                                    <input type="text" class="form-control" name="surname" id="surname" aria-describedby="helpId" placeholder="" value="<?php echo $row['surname'] ?>" />
                                    <small id="helpId" class="form-text text-muted">คุณสามารถเปลี่ยนนามสกุลได้</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">username</label>
                                    <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="" value="<?php echo $row['username'] ?>" />
                                    <small id="helpId" class="form-text text-muted">คุณสามารถเปลี่ยนชื่อผู้ใช้ได้</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">password</label>
                                    <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="" value="<?php echo $row['password'] ?>" />
                                    <small id="helpId" class="form-text text-muted">คุณสามารถเปลี่ยนรหัสผ่านได้</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">new password</label>
                                    <input type="password" class="form-control" name="n-password" id="n-password" aria-describedby="helpId" placeholder="" value="<?php echo $row['password'] ?>" />
                                    <small id="helpId" class="form-text text-muted">คุณสามารถเปลี่ยนรหัสผ่านได้</small>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">
                                    Save
                                </button>

                            </form>
                        </div>

                        <div class="col-sm-12 col-lg-6 user-dis">

                            <div class="box-user m-3">
                                <div class="p-5">
                                    <h2>ข้อมูลจริง</h2>
                                    <div class="mb-3">
                                        <label for="" class="form-label">ชื่อจริง</label>
                                        <input disabled type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="" value="<?php echo $row['r_name'] ?>" />
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">นามสกุล</label>
                                        <input disabled type="text" class="form-control" name="surname" id="surname" aria-describedby="helpId" placeholder="" value="<?php echo $row['r_surname'] ?>" />
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">ชื่อเล่น</label>
                                        <input disabled type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="" value="<?php echo $row['r_nickname'] ?>" />
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">ชั้น</label>
                                        <input disabled type="text" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="" value="<?php echo $row['r_class'] ?>" />
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">เลขที่</label>
                                        <input disabled type="text" class="form-control" name="n-password" id="n-password" aria-describedby="helpId" placeholder="" value="<?php echo $row['r_number'] ?>" />
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">เลขที่ปะจำตัว</label>
                                        <input disabled type="text" class="form-control" name="n-password" id="n-password" aria-describedby="helpId" placeholder="" value="<?php echo $row['r_student_num'] ?>" />
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </main>
    <?php include('./footer.php'); ?>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="./Framework/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/42b75145a7.js" crossorigin="anonymous"></script>
</body>

</html>