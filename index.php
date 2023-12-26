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
                <p class="index-title">
                <h2>สวัสดีคุณ <b><?php echo $role; ?> <?php echo $surname; ?> </b></h2>
                </p>
                <div class="container">
                    <!-- AI DIV -->
                    <div class="row text-center d-flex" id="ai">
                        <div class="top-menu p-2 fs-4">
                            <img src="./img/yrc_logo.png" class="title-icon p-1 m-0" alt="">
                            AI ใหม่มาแรง
                        </div>
                        <div class="col-lg-6 mt-3">
                            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./img/chatgpt-ico.jpg" alt="">
                            <h2 class="fw-normal">Chat-GPT</h2>
                            <p>Chat GPT ย่อมาจาก Generative Pre-trained Transformer เป็นโมเดลภาษาปัญญาประดิษฐ์ขั้นสูง พัฒนาโดยบริษัท OpenAI โดยใช้โครงข่ายประสาทเทียมที่มีพารามิเตอร์ 1.75 แสนล้านพารามิเตอร์ที่ช่วยในการวิเคราะห์คำสั่งและตอบสนองได้เหมือนมนุษย์</p>
                            <p><a class="btn btn-primary" href="https://openai.com/">อ่านเพิ่มเติม »</a></p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-6 mt-3">
                            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./img/Google-Bard-Logo.png" alt="">
                            <h2 class="fw-normal">Bard AI</h2>
                            <p>Bard เป็น Chatbot AI หรือเรียกอีกชื่อหนึ่งว่า Conversational AI ที่พัฒนาโดย Google ด้วยระบบ Large Language Model ที่ถูกฝึกฝนให้มีความรู้และความครอบคลุมอย่างกว้างขวาง จากข้อมูลมากมายจึงมีความสามารถในการสื่อสารและสร้างข้อความที่เหมือนกับการตอบสนองของมนุษย์ ในรูปแบบประโยคต่อประโยคและคำถามต่างๆ</p>
                            <p><a class="btn btn-primary" href="https://bard.google.com/chat">อ่านเพิ่มเติม »</a></p>
                        </div><!-- /.col-lg-4 -->

                    </div>

                    <!-- TODO LIST & NEWS -->
                    <div class="row">
                        <!-- TODOLIST -->
                        <div class="col-md-12 col-lg-6">
                            <a href="./todo_List.php" class="top-a">
                                <div class="top-menu p-2 fs-4">

                                    <img src="./img/yrc_logo.png" class="title-icon p-1 m-0" alt="">
                                    TODO LIST <a class="btn btn-outline-light btn-sm ms-2" href="todo_List.php" role="button"> + </a>

                                </div>
                            </a>


                            <!-- content -->
                            <?php include('./TodoList-com.php'); ?>
                        </div>

                        <!-- NEWS -->
                        <div class="col-md-12 col-lg-6">
                            <a href="./news.php" class="top-a">
                                <div class="top-menu p-2 fs-4">

                                    <img src="./img/yrc_logo.png" class="title-icon p-1 m-0" alt="">
                                    NEWS

                                </div>
                            </a>


                            <!-- content -->
                            <?php include('./news-com.php'); ?>
                        </div>

                    </div>

                    <!-- Homework -->
                    <div class="row">
                        <div class="col-12">
                            <a href="./homework.php" class="top-a">
                                <div class="top-menu p-2 fs-4">

                                    <img src="./img/yrc_logo.png" class="title-icon p-1 m-0" alt="">
                                    HOMEWORK

                                </div>
                            </a>

                            <!-- content -->
                            <?php include('./homework-com.php'); ?>
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