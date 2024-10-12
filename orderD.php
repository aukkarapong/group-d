<?php

// include("check_login.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>order</title>
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
</head>
<style>
    .button-container {
        display: flex;
        gap: 10px;
        /* ระยะห่างระหว่างปุ่ม */
    }

    .button-container button {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }

    .button-primary {
        background-color: #000033;
        /* สีเขียว */
        color: white;
        border: none;
        border-radius: 4px;
    }

    .button-secondary {
        background-color: #4CAF50;
        /* สีแดง */
        color: white;
        border: none;
        border-radius: 4px;
    }
</style>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center" style="height: 45px;">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex align-items-center justify-content-end" style="text-align:right">
                    <a href="member.php" class="text-light me-4">สมัครสมาชิก</a>
                    <a href="data_member.php" class="text-light me-4">โปรไฟล์</a>
                    <a href="home.php" class="text-light me-0">ออกจากระบบ</a>
                </div>
            </div>

        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href=".html" class="navbar-brand p-0">

                <img src="image/logo.jpg" class="image-fluid w-100" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">หน้าแรก</a>
                    <a href="cifmt1.php" class="nav-item nav-link">ข้อมูลสนามแบดมินตัน</a>
                    <a href="orderA.php" class="nav-item nav-link">สินค้า</a>
                    <a href="newac.php" class="nav-item nav-link">ข่าวสารกิจกรรม</a>
                    <a href="rules1.php" class="nav-item nav-link">กฏระเบียบ</a>
                    <a href="tidto1.php" class="nav-item nav-link">ติดต่อเรา</a>
                </div>
                <a href="booking.php" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">จองคิวสนามแบดมินตัน</a>
            </div>
        </nav>


        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                <img src="image/8.jpg" class="img-fluid w-100" alt="image">
                <div class="carousel-caption">
                    <div class="carousel-caption-content p-3">
                        <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 1px;"></h5>
                        <h1 class="display-1 text-capitalize text-white mb-4">รายการสินค้า

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Carousel End -->
    </div>
    <main class="app-main"> <!--begin::App Content Header-->
        <div class="app-content">
            <br>
            <div class="container-fluid">

                <h4>ถุงเท้าแบดมินตัน</h4>
                <img src="image/1.jfif" alt="image">
                <p>
                    1.VICTOR ถุงเท้าแบดมินตัน
                    ราคาคู่ละ 170 บาท

                </p>

                <p> เหลือจำนวนสินค้าอีก 10 คู่</p>
                <div class="button-container">
                    <a href="buy.php" class="button-primary">สั่งซื้อสินค้า</a>
                    <a href="shopping_cart.php" class="button-primary">ตะกร้าสินค้า</a>
                </div><br>

            </div>
            <div class="container-fluid">

                <h4></h4>
                <img src="image/2.jfif" alt="image">
                <p>
                    2.YONEX ถุงเท้าแบดมินตัน
                    ราคา 169 บาท


                </p>

                <p> เหลือจำนวนสินค้าอีก 10 คู่</p>
                <div class="button-container">
                    <a href="buy.php" class="button-primary">สั่งซื้อสินค้า</a>
                    <a href="shopping_cart.php" class="button-primary">ตะกร้าสินค้า</a>
                </div><br>

            </div>
            <div class="container-fluid">

                <h4></h4>
                <img src="image/20.jpg" alt="image">
                <p>
                    3.ถุงเท้ากีฬากันลื่น VS Venson
                    ราคาคู่ละ 160 บาท
                </p>

                <p> เหลือจำนวนสินค้าอีก 10 คู่</p>
                <div class="button-container">
                    <a href="buy.php" class="button-primary">สั่งซื้อสินค้า</a>
                    <a href="shopping_cart.php" class="button-primary">ตะกร้าสินค้า</a>
                </div><br>

            </div>
        </div> <!--end::App Content-->
    </main> <!--end::App Main-->





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

</body>

</html>