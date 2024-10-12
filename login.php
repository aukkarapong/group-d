<?php
include("dbconnect.php");



session_start();

if (isset($_POST['login-button'])) {

    // if ($_POST['username'] == 'ฟาง' && $_POST['password'] == '123456') {
    // $_SESSION['isLogin'] = true;
    // $_SESSION['username'] = $_POST['username'];
    // header("Location: index.php");
    // exit;
    // }

    $sql = "
SELECT * FROM person
WHERE username= '" . $_POST['username'] . " '
AND password='" . $_POST['password'] . "'
";

    $result = $connection->query($sql);

    // ตรวจสอบผลลัพธ์จากการ Query
    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // print_r($user);
        // exit;
        $_SESSION['isLogin'] = true;
        $_SESSION['idusername'] = $user['idusername'];
        echo "<script>
    window.onload = function() {
        Swal.fire({
            title: 'เข้าสู่ระบบเสร็จสมบูรณ์!',
            icon: 'success',
            confirmButtonText: 'ตกลง'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'index.php';
            }
        });
    }
</script>";
    } else {
        header("Location: login.php?status=error");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PJbadminton1</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/PJbadminton1/physical-therapy-website-template/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/PJbadminton1/physical-therapy-website-template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="/PJbadminton1/physical-therapy-website-template/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/PJbadminton1/physical-therapy-website-template/css/style.css" rel="stylesheet">

    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <meta name="google-signin-client_id" content="513129400585-2g6hr7kgqq2mr7vu3dt8umffq7gmf4nu.apps.googleusercontent.com">
</head>

<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center" style="height: 45px;">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex align-items-center justify-content-end" style="text-align:right">
                    <a href="#" class="text-light me-4">สมัครสมาชิก</a>
                    <a href="login.php" class="text-light me-4">ลงชื่อเข้าใช้งาน</a>
                    <a href="#" class="text-light me-0">ออกจากระบบ</a>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">

                <img src="image/logo.jpg" class="image-fluid w-100" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="home.php" class="nav-item nav-link active">หน้าแรก</a>
                    <a href="cifmt.php" class="nav-item nav-link">ข้อมูลสนามแบดมินตัน</a>
                    <a href="order.php" class="nav-item nav-link">สินค้า</a>
                    <a href="newac.php" class="nav-item nav-link">ข่าวสารกิจกรรม</a>
                    <a href="rules.php" class="nav-item nav-link">กฏระเบียบ</a>
                    <a href="tidto.php" class="nav-item nav-link">ติดต่อเรา</a>
                </div>
                <a href="booking.php" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">จองคิวสนามแบดมินตัน</a>
            </div>
        </nav>

        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                <img src="image/6.jpg" class="img-fluid w-100" alt="image">
                <div class="carousel-caption">
                    <div class="carousel-caption-content p-1">
                        <div class="login-box">

                            <div class="login-logo">
                                <a href="index.html"><b>ลงชื่อเข้าใช้ระบบ</b></a>
                            </div> <!-- /.login-logo -->
                            <b>ลงชื่อเข้าใช้งานระบบ</b>

                            <div class="card-body login-card-body">
                                <p class="login-box-msg">รหัสผู้ใช้งาน</p>

                                <form name="login-form" action="login.php" method="post">
                                    <div class="input-group mb-3">
                                        <input name="username" type="text" class="form-control" placeholder="username">
                                        <div class="input-group-text">
                                            <span class="bi bi-envelope"></span>
                                        </div>
                                    </div>
                                    <p class="login-box-msg">รหัสผ่าน</p>
                                    <div class="input-group mb-3">
                                        <input name="password" type="password" class="form-control" placeholder="Password">
                                        <div class="input-group-text">
                                            <span class="bi bi-lock-fill"></span>
                                        </div>
                                    </div> <!--begin::Row-->
                                    <label for="option1"></label>
                                    <input type="checkbox" name="options[]" value="Option 1" id="option1">บุคคลภายใน<br>

                                    <label for="option2"></label>
                                    <input type="checkbox" name="options[]" value="Option 2" id="option2">บุคคลภายนอก<br>

                                    <div class="col-12">
                                        <div class="d-grid gap-2">
                                            <button button name="login-button" class="btn btn-primary">เข้าสู่ระบบ</button>
                                        </div>
                                    </div> <!-- /.col --><br>
                                    <div id="g_id_onload" data-client_id="513129400585-2g6hr7kgqq2mr7vu3dt8umffq7gmf4nu.apps.googleusercontent.com" data-context="signin" data-ux_mode="redirect" data-login_uri="http://localhost/PJbadminton1/login-with-google.php" data-callback="loginWithGoogleSuccess" data-auto_prompt="false">
                                    </div>

                                    <div class="g_id_signin" data-type="standard" data-shape="pill" data-theme="outline"></div>
                            </div>
                        </div> <!--end::Row-->
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4"><i class="fas fa-star-of-life me-3"></i>สนามแบดมินตันมหาวิทยาลัยเกษตรศาสตร์
                            วิทยาเขตเฉลิมพระเกียรติ จังหวัดสกลนคร</h4>
                        <p>โทร: 061-0287788
                            ที่อยู่: 59 หมู่ 1 ถ.วปรอ 366 ต.เชียงเครือ อ.เมือง จ.สกลนคร 47000
                        </p>

                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white"></h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> หน้าแรก</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> เงื่อนไขการใช้สนาม</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> วิธีการจองคิวสนามแบดมินตัน</a>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/PJbadminton1/physical-therapy-website-template/lib/wow/wow.min.js"></script>
    <script src="/PJbadminton1/physical-therapy-website-template/lib/easing/easing.min.js"></script>
    <script src="/PJbadminton1/physical-therapy-website-template/lib/waypoints/waypoints.min.js"></script>
    <script src="/PJbadminton1/physical-therapy-website-template/lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="/PJbadminton1/physical-therapy-website-template/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');

        if (status === 'success') {
            Swal.fire({
                title: 'เข้าสู่ระบบเสร็จสมบูรณ์!',
                icon: 'success',
                confirmButtonText: 'ตกลง'
            });
        }
        document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');

            if (status === 'error') {
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด!',
                    text: 'ข้อมูลไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง',
                    confirmButtonText: 'ตกลง'
                });
            }
        });
    </script>

</body>

</html>