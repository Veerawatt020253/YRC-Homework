<?php

session_start();

include('../link.php');

require_once "../config/conn-mysqli.php";

$name = $_SESSION['name'];
$surname = $_SESSION['surname'];
$user_id = $_SESSION['id'];
$username = $_SESSION['username'];
$role = $_SESSION['role'];

$table = "member";

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

$sql = "SELECT * FROM $table";
$result = $connect->query($sql);

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


                    <div class="d-block">
                        <div class="w-100">
                            <div class="top-menu p-2 fs-4">

                                <img src="../img/yrc_logo.png" class="title-icon p-1 m-0" alt="">
                                Member menu

                            </div>

                            <!-- content -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h3 class="card-title">ข้อมูลสมาชิก &amp; การปรับแต่ง <a class="btn btn-outline-primary btn-sm " href="add-member.php" role="button"> + </a></h3>
                                </div>

                                <div class="card-body w-100">
                                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                        <div class="w-100">
                                            <div class="table-responsive">
                                                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                                                    <thead>
                                                        <tr>
                                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">id</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">username</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">password</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">name</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">surname</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">role</th>
                                                            <th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php while ($row = $result->fetch_assoc()) : ?>
                                                        <tr class="odd">
                                                            <td class="dtr-control sorting_1" tabindex="0"><?php echo $row['id']; ?></td>
                                                            <td><?php echo $row['username']; ?></td>
                                                            <td><?php echo $row['password']; ?></td>
                                                            <td><?php echo $row['name']; ?></td>
                                                            <td><?php echo $row['surname']; ?></td>
                                                            <td><?php echo $row['role']; ?></td>
                                                            <td class="d-flex">
                                                                <div class="m-auto">
                                                                    
                                                                        <a class="btn btn-danger btn-sm " href="./delete.php?id=<?php echo $row['id']; ?>&table=<?php echo $table; ?>" role="button">delete</a>
                                                                    
                                                                        <a class="btn btn-primary btn-sm " href="./edit.php?id=<?php echo $row['id']; ?>&table=<?php echo $table; ?>" role="button">edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endwhile ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th rowspan="1" colspan="1">id</th>
                                                            <th rowspan="1" colspan="1">username</th>
                                                            <th rowspan="1" colspan="1">password</th>
                                                            <th rowspan="1" colspan="1">name</th>
                                                            <th rowspan="1" colspan="1">surname</th>
                                                            <th rowspan="1" colspan="1">role</th>
                                                            <th rowspan="1" colspan="1">option</th>
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