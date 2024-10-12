<?php

// include("check_login.php");

// เชื่อมต่อฐานข้อมูล
include('dbconnect.php');

if (isset($_POST['submit-button'])) {
    // echo $profilePath;

    // exit;

    // เขียนคำสั่ง sql
    $sql = " 
    UPDATE person SET 
    firstname = '" . $_POST['firstname'] . "',
      lastname = '" . $_POST['lastname'] . "',
      gmail = '" . $_POST['gmail'] . "'
      WHERE 
      idusername = '" . $_POST['id'] . "'
    ";

    // ถ้า insert ได้ให้ redirect ไปที่หน้าแสดงข้อมูล
    if ($connection->query($sql)) {
        header("Location: data_member.php");
        exit();
    }
    // ถ้า insert ไม่ผ่าน ให้ alert
    echo '<script>alert("บันทึกข้อมูลไม่สำเร็จ")</script>';
}

// เขียนคำสั่ง sql ในการ select ข้อมูล
$sql = " SELECT * FROM person WHERE idusername = " . $_GET['id'] . "
";

//สร้างตัวแปรแบบ Array มารับข้อมูลที่ได้จากฐานข้อมูล
$adminData = [];

// & สั่งรันคำสั่ง sql
$result = $connection->query($sql);
if ($result && $result->num_rows > 0) {
    $adminData = $result->fetch_assoc();
}

//  echo '<pre>';
//  print_r($adminData);

// เอาข้อมูลจากตัวแปรไปแปะใน input text
// update ข้อมูล
// check ว่ามีการกดปุ่ม submit button ไหม



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>data_member</title>
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
                    <a href="order.php" class="nav-item nav-link">สินค้า</a>
                    <a href="newac.php" class="nav-item nav-link">ข่าวสารกิจกรรม</a>
                    <a href="rules.php" class="nav-item nav-link">กฏระเบียบ</a>
                    <a href="tidto.php" class="nav-item nav-link">ติดต่อเรา</a>
                </div>
                <a href="booking.php" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">จองคิวสนามแบดมินตัน</a>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">แก้ไขข้อมูลสมาชิก</h3>
                        </div>
                        <!-- <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item">
                                    <a href="index.php">หน้าแรก</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    เพิ่มข้อมูลเจ้าหน้าที่
                                </li>
                            </ol>
                        </div> -->
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header--> <!--begin::App Content-->
            <div class="app-content">
                <div class="container-fluid">
                    <div class="col-md-6"> <!--begin::Quick Example-->
                        <!--begin::Form-->
                        <form action="data_edit.php" method="post" name="demo_form" enctype="multipart/form-data">
                            <input name="id" type="hidden" value="<?php echo $adminData['idusername']; ?>">
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label"> Firstname</label>
                                    <input name="firstname" type="text" class="form-control" value="<?php echo $adminData['firstname']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Lastname</label>
                                    <input name="lastname" type="text" class="form-control" value="<?php echo $adminData['lastname']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Gmail</label>
                                    <input name="gmail" type="gmail" class="form-control" value="<?php echo $adminData['gmail']; ?>">
                                </div>

                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="card-footer d-flex justify-content-end">
                                    <button name="submit-button" type="submit" class="btn btn-warning me-2">แก้ไข</button>
                                </div>
                                <!--end::Footer-->
                        </form> <!--end::Form-->
                    </div> <!--end::Quick Example-->
                </div> <!-- /.container-fluid -->
            </div> <!--end::App Content-->
        </main> <!--end::App Main-->
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

    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (
                sidebarWrapper &&
                typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script>

</body>

</html>