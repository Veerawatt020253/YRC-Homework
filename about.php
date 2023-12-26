<?php

include('./view-c.php');

session_start();

include('./link.php');

require_once "config/conn.php";

$name = $_SESSION['name'];
$surname = $_SESSION['surname'];
$user_id = $_SESSION['id'];
$role = $_SESSION['role'];

if ($name == null) {
    $_SESSION['login'] = false;
    $html_login = "d-block";
    $html_name = "d-none";
    // echo $html_login;
    // echo $html_name;
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

$sql = "SELECT * FROM web WHERE id = 1";
$result = $connect->query($sql);
?>

<!doctype html>
<html lang="en">

<head>
    <title>YRC13 - NEWS</title>
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
                <div class="container">

                    <div class="card mt-3">
                        <div class="card-header">
                            <h3 class="card-title">เกี่ยวกับเรา</h3>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="m-3 fs-3">
                                    <?php while ($row = $result->fetch_assoc()) { ?>
                                        หัวหน้าห้อง : <?php echo $row['leader']; ?><br>
                                        ชั้น : <?php echo $row['class']; ?><br>
                                        จัดทำโดย : <?php echo $row['owner']; ?><br>
                                    <?php } ?>
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