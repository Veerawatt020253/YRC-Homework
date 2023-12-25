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
    echo "<script>location.href = './login.php'</script>";
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

$sql = "SELECT * FROM homework ORDER BY id DESC";
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
                <div class="container">

                        <div class="card mt-3">
                                <div class="card-header">
                                    <h3 class="card-title">การบ้าน</h3>
                                </div>

                                <div class="card-body w-100">
                                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                        <div class="w-100">
                                            <div class="table-responsive">
                                                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                                                    <thead>
                                                        <tr>
                                    
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">วิชา</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">ครู </th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">หัวเรื่อง</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">คะแนน</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">วันที่</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php while ($row = $result->fetch_assoc()) : ?>
                                                        <tr class="odd">
                                                            
                                                            <td><?php echo $row['subject']; ?></td>
                                                            <td><?php echo $row['teacher'] ?></td>
                                                            <td><?php echo $row['title']; ?></td>
                                                            <td><?php echo $row['point']; ?></td>
                                                            <td><?php echo $row['time']; ?></td>
                                                        </tr>
                                                    <?php endwhile ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            
                                                            <th rowspan="1" colspan="1">วิชา</th>
                                                            <th rowspan="1" colspan="1">ครู</th>
                                                            <th rowspan="1" colspan="1">หัวเรื่อง</th>
                                                            <th rowspan="1" colspan="1" class="text-center">option</th>
                                            
                                                        </tr>
                                                    </tfoot>
                                                </table>
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