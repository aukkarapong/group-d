<?php

// include("check_login.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>jong</title>
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
            background-color: #4CAF50;
            /* สีเขียว */
            color: white;
            border: none;
            border-radius: 4px;
        }

        .button-secondary {
            background-color: #f44336;
            /* สีแดง */
            color: white;
            border: none;
            border-radius: 4px;
        }
    </style>



</head>

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
                    <a href="login.php" class="text-light me-4">ลงชื่อเข้าใช้งาน</a>
                    <a href="#" class="text-light me-0">ออกจากระบบ</a>
                </div>
            </div>

        </div>
    </div>
    <!-- Topbar End -->


    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">

                <img src="image/logo.jpg" class="image-fluid w-100" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="home.php" class="nav-item nav-link active">หน้าแรก</a>
                    <a href="cifmt.php" class="nav-item nav-link">ข้อมูลสนามแบดมินตัน</a>
                    <a href="order1.php" class="nav-item nav-link">สินค้า</a>
                    <a href="newac.php" class="nav-item nav-link">ข่าวสารกิจกรรม</a>
                    <a href="rules.php" class="nav-item nav-link">กฏระเบียบ</a>
                    <a href="tidto.php" class="nav-item nav-link">ติดต่อเรา</a>
                </div>
                <a href="bookingA.php" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">จองคิวสนามแบดมินตัน</a>
            </div>
        </nav>

        <br>
        <main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content">
                <div class="container-fluid">
                    <div class="callout callout-info mb-4">
                        <h5 class="fw-bold">KUCSC</h5>
                        <p>
                            The <a href="/starter.html" target="_blank" rel="noopener noreferrer" class="callout-link">
                                starter page
                            </a> is a good place to start building your app if you’d like to
                            start from scratch.
                        </p>
                    </div>

                    <h4>จองคิวสนามแบดมินตัน</h4>
                    <p>
                        สนามแบดมินตัน badminton court
                    </p>
                    <!-- <a href="search.php" target="_blank">ค้นหาสนามว่าง</a> -->

                    <!-- <div class="search-container">
                        <input type="text" id="search-input" placeholder="ค้นหาสนามว่าง...">
                        <button name="search-input" type="submit" id="search-btn">ค้นหา</button>
                    </div><br> -->
                    <script src="script.js"></script><br>

                    <label for="options">เลือกคอร์ทสนาม</label>
                    <select id="options" name="options">
                        <option value="1">สนาม 1</option>
                        <option value="2">สนาม 2</option>
                        <option value="3">สนาม 3</option>
                        <option value="4">สนาม 4</option>
                    </select><br>
                    <!-- 
                    <button onclick="displaySelectedOption()">Submit</button>

                    <p id="result"></p> -->

                    <div class="mb-3 ">
                        <label class="form-label">เลือกวันที่</label>
                        <input type="text" name="create_date" id="create_date" class="form-control">
                    </div>

                    <br>
                    <p>
                        การจองคิวสนามแบดมินตัน
                        สีเขียวคือ ว่าง สีเทาคือ ไม่ว่าง หรือ มีคนจองคิวสนามแล้ว
                    </p>
                    <h1>คอร์ทที่ 1 (COURT 1)</h1>
                    <div class="button-container">
                        <button id="A" button name="submit-button" class="button-primary">คิวที่ 1 เวลา 1 ชั่วโมง
                            15.00-16.00</button>
                        <button id="A1" class="button-primary">คิวที่ 2 เวลา 1 ชั่วโมง
                            16.00-17.00</button>
                        <button id="A2" class="button-primary">คิวที่ 3 เวลา 1 ชั่วโมง
                            17.00-18.00</button>
                        <button id="A3" class="button-primary">คิวที่ 4 เวลา 1 ชั่วโมง
                            18.00-19.00</button>
                        <button id="A4" class="button-primary">คิวที่ 5 เวลา 1 ชั่วโมง
                            19.00-20.00</button>
                        <button id="A5" class="button-primary">คิวที่ 6 เวลา 1 ชั่วโมง
                            20.00-21.00</button>
                        <button id="A6" class="button-primary">คิวที่ 7 เวลา 1 ชั่วโมง
                            21.00-24.00</button>
                    </div><br>
                </div> <!-- /.container-fluid -->
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

        <script>
            // ทำให้ป๊อบอัพแสดงผลเมื่อผู้ใช้พยายามออกจากหน้าเว็บ
            window.addEventListener('beforeunload', function(event) {
                document.getElementById('popup').style.display = 'flex';
                event.returnValue = ''; // ป้องกันไม่ให้ผู้ใช้ออกจากหน้าเว็บ
            });
            document.getElementById('A').addEventListener('click', function() {
                alert('จองคิวสนามแบดมินตันไม่ได้ กรุณาสมัครสมาชิก!');
                document.getElementById('popup').style.display = 'none';
            });
            document.getElementById('A1').addEventListener('click', function() {
                alert('จองคิวสนามแบดมินตันไม่ได้ กรุณาสมัครสมาชิก!');
                document.getElementById('popup').style.display = 'none';
            });
            document.getElementById('A2').addEventListener('click', function() {
                alert('จองคิวสนามแบดมินตันไม่ได้ กรุณาสมัครสมาชิก!');
                document.getElementById('popup').style.display = 'none';
            });
            document.getElementById('A3').addEventListener('click', function() {
                alert('จองคิวสนามแบดมินตันไม่ได้ กรุณาสมัครสมาชิก!');
                document.getElementById('popup').style.display = 'none';
            });
            document.getElementById('A4').addEventListener('click', function() {
                alert('จองคิวสนามแบดมินตันไม่ได้ กรุณาสมัครสมาชิก!');
                document.getElementById('popup').style.display = 'none';
            });
            document.getElementById('A5').addEventListener('click', function() {
                alert('จองคิวสนามแบดมินตันไม่ได้ กรุณาสมัครสมาชิก!');
                document.getElementById('popup').style.display = 'none';
            });
            document.getElementById('A6').addEventListener('click', function() {
                alert('จองคิวสนามแบดมินตันไม่ได้ กรุณาสมัครสมาชิก!');
                document.getElementById('popup').style.display = 'none';
            });
        </script>
</body>

</html>