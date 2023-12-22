<?php

session_start();

include('../link.php');

require_once "../config/conn-mysqli.php";

$name = $_SESSION['name'];
$surname = $_SESSION['surname'];
$user_id = $_SESSION['id'];


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

$sql = "SELECT * FROM member ORDER BY id DESC LIMIT 1";
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
    <link rel="stylesheet" href="../Framework/bootstrap/css/bootstrap.min.css">

    <!-- <link rel="shortcut icon" href="../img/yrc_logo.png" type="image/png"> -->

    <link rel="stylesheet" href="../Framework/adminlte/dist/css/adminlte.min.css">

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
                <h2>สวัสดีคุณ <b><?php echo $name; ?> <?php echo $surname; ?> </b></h2>
                </p>
                <div class="container">


                    <div class="row">
                        <div class="col-12">
                            <div class="top-menu p-2 fs-4">

                                <img src="../img/yrc_logo.png" class="title-icon p-1 m-0" alt="">
                                Admin menu

                            </div>

                            <!-- content -->
                            <div class="row mt-3">
                                <div class="col-lg-3 col-6">

                                    <div class="small-box bg-info">
                                        <div class="inner">
                                        <?php while ($row = $result->fetch_assoc()) : ?>
                                            <h3><?php echo $row['id'] ?></h3>
                                            <p>Member</p>
                                        <?php endwhile ?>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">

                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h3>53<sup style="font-size: 20px">%</sup></h3>
                                            <p>Bounce Rate</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-stats-bars"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">

                                    <div class="small-box bg-warning">
                                        <div class="inner">
                                            <h3>44</h3>
                                            <p>User Registrations</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-person-add"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">

                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                            <h3>65</h3>
                                            <p>Unique Visitors</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-pie-graph"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </main>
    <?php include('../footer.php'); ?>
    <!-- Bootstrap JavaScript Libraries -->
    <!-- <script src="../Framework/adminlte/dist/js/adminlte.min.js"></script> -->
    <script src="../Framework/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/42b75145a7.js" crossorigin="anonymous"></script>
</body>

</html>