<header class="d-block">
    <!-- navbar sm -->
    <nav class="navbar navbar-dark bg-dark fixed-top d-block d-lg-none">
        <div class="container-fluid">
            <img src="./img/yrc_logo.png" class="logo" alt>
            <a class="navbar-brand" href="./index.php">Homework</a>
            <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end navbar-dark  bg-dark " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel">Yupparaj - Homework</h5>
                    <button type="button" class="btn-close btn-close-white  text-reset " data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">หน้าแรก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./c/c1.html">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../c/c2.html">TodoList</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./c/c3.html">Homework</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./c/c4.html">title</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./c/c5.html">title</a>
                        </li>
                        <hr>
                        <!-- member -->
                        <div class="<?php echo $html_login; ?>">
                            <li class="nav-item">
                                <a class="nav-link" href="./login.php">เข้าสู่ระบบ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./c/c5.html">สมัครสมาชิก</a>
                            </li>
                        </div>
                        <!-- username -->
                        <div class="<?php echo $html_name ?>">
                            <li class="nav-item">
                                <a class="nav-link" href="./c/c5.html"><?php echo $_SESSION['name']; ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./logout.php">logout</a>
                            </li>
                        </div>
<hr>
                        <li class="nav-item">
                            <a class="nav-link" href="./c/AD.html">ติดต่อเรา</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg fixed-top   navbar-dark bg-dark d-none d-lg-block ">
        <div class="container">
            <img src="./img/yrc_logo.png" class="logo" alt>&nbsp;&nbsp;
            <a class="navbar-brand" href="./index.php">Homework</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="./index.php" aria-current="page">หน้าแรก <span class="visually-hidden">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">เมนู</a>
                        <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="./c/c1.html">NEWS</a>
                            <a class="dropdown-item" href="./c/c2.html">TodoList</a>
                            <a class="dropdown-item" href="./c/c3.html">Homework</a>
                            <a class="dropdown-item" href="./c/c4.html">title</a>
                            <a class="dropdown-item" href="./c/c5.html">title</a>
                            <hr>

                            <!-- member -->
                            <div class="<?php echo $html_login; ?>">
                                <a class="dropdown-item" href="./login.php">
                                    เข้าสู่ระบบ
                                </a>
                                <a class="dropdown-item" href="./c/c6.html">
                                    สมัครสมาชิก
                                </a>
                            </div>
                            <!-- username -->
                            <div class="<?php echo $html_name ?>">
                                <a class="dropdown-item" href="./c/c6.html">
                                    <?php echo $_SESSION['name']; ?>
                                </a>
                                <a class="dropdown-item" href="./logout.php">
                                    logout
                                </a>
                            </div>

                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./c/AD.html">ติดต่อเรา</a>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

</header>