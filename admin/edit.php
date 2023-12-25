<?php

session_start();

include('../link.php');

require_once "../config/conn-mysqli.php";

$name = $_SESSION['name'];
$surname = $_SESSION['surname'];
$user_id = $_SESSION['id'];
$username = $_SESSION['username'];
$role = $_SESSION['role'];

$table = $_GET['table'];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM $table WHERE id=$id";
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

?>

    <!doctype html>
    <html lang="en">

    <head>
        <title>YRC13 - Homework</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <link rel="stylesheet" href="../Framework/adminlte/dist/css/adminlte.min.css">
        <!-- Bootstrap CSS v5.2.1 -->
        <link rel="stylesheet" href="../Framework/bootstrap/css/bootstrap.min.css">

        <link rel="shortcut icon" href="../img/yrc_logo.png" type="image/png">

        <link rel=”icon” type=”image/png href=”../img/yrc_logo.png” />

        <link rel="stylesheet" href="./admin.css">

    </head>

    <body>
        <?php include_once('./header.php'); ?>
        <main>
            <div class="mt-5 mb-3">

                <?php include('./banner.php'); ?>

                <div class="container mt-3">
                    <p class="index-title">
                    <h2>สวัสดีคุณ <b><?php echo $role; ?> </b></h2>
                    </p>
                    <div class="container">


                        <div class="row">
                            <div class="col-12">
                                <div class="top-menu p-2 fs-4">

                                    <img src="../img/yrc_logo.png" class="title-icon p-1 m-0" alt="">
                                    Form Update <b><?php echo $table; ?></b>

                                </div>

                                <!-- content -->
                                <div class="row">
                                    <div class="col-sm-5">
                                        <br>
                                        <form action="s_edit.php" method="post">
                                            <div class="form-group">
                                                table : <input type="text" name="table" readonly value="<?php echo $table ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                id : <input type="number" name="id" readonly value="<?php echo $row['id']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                name : <input type="text" name="name" required value="<?php echo $row['name']; ?>" class="form-control" placeholder="name">
                                            </div>
                                            <div class="form-group">
                                                surname : <input type="text" name="surname" required value="<?php echo $row['surname']; ?>" class="form-control" placeholder="surname">
                                            </div>
                                            <div class="form-group">
                                                username : <input type="text" name="username" required value="<?php echo $row['username']; ?>" class="form-control" placeholder="username">
                                            </div>
                                            <div class="form-group">
                                                password : <input type="text" name="password" required value="<?php echo $row['password']; ?>" class="form-control" placeholder="password">
                                            </div>
                                            <div class="form-group">
                                                role : <input type="text" name="role" required value="<?php echo $row['role']; ?>" class="form-control" placeholder="role">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary w-100">save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        <?php } else {
        echo 'Error!';
    } ?>
        </main>
        <?php include('../footer.php'); ?>
        <!-- Bootstrap JavaScript Libraries -->
        <!-- <script src="../Framework/adminlte/dist/js/adminlte.min.js"></script> -->
        <script src="../Framework/bootstrap/js/bootstrap.bundle.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://kit.fontawesome.com/42b75145a7.js" crossorigin="anonymous"></script>
    </body>

    </html>