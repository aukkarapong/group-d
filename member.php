<?php
include("dbconnect.php");



session_start();



if (isset($_POST['submit-button'])) {
    //รับค่าจากฟอร์ม
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

    $sql = "INSERT INTO person (username, firstname, lastname, phone, gmail, password, usertype) VALUES(
            '$username',
            '$firstname',
            '$lastname',
            '$phone',
            '$gmail',
            '$password',
            '$usertype'  
    )";




    // ถ้า insert ได้ให้ redirect ไปที่หน้าแสดงข้อมูล
    if ($connection->query($sql)) {
        header("Location: mamber.php?status=success");
        exit();
    } else {
        header("Location: mamber.php?status=error");
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


    <title>สมัครสมาชิก</title>
    <style>
        form {
            width: 50%;
            margin: auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 2px 2px 12px #aaa;
        }

        div {
            margin-bottom: 15px;
        }

        label {
            display: inline-block;
            width: 150px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 160px);
            padding: 5px;
        }

        input[type="checkbox"] {
            margin-left: 160px;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
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
                    <a href="cifmt1.php" class="nav-item nav-link">ข้อมูลสนามแบดมินตัน</a>
                    <a href="order.php" class="nav-item nav-link">สินค้า</a>
                    <a href="newac.php" class="nav-item nav-link">ข่าวสารกิจกรรม</a>
                    <a href="rules1.php" class="nav-item nav-link">กฏระเบียบ</a>
                    <a href="tidto1.php" class="nav-item nav-link">ติดต่อเรา</a>
                </div>
                <a href="booking.php" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">จองคิวสนามแบดมินตัน</a>
            </div>
        </nav>

        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                </div>
            </div>


            <h2 style="text-align:center;">สมัครสมาชิก</h2>
            <p style="text-align:center">ข้อมูลทั่วไป</p>
            <form id="register-form" action="member.php" method="post">
                <div>
                    <label for="firstname">ชื่อ:</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>
                <div>
                    <label for="lastname">นามสกุล:</label>
                    <input type="text" id="lastname" name="lastname" required>
                </div>
                <div>
                    <label for="phone">เบอร์โทร:</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                <div>
                    <label for="email">อีเมล์:</label>
                    <input type="email" id="gmail" name="gmail" required>
                </div>
                <div>
                    <label for="username">username:</label>
                    <input type="id" id="username" name="username" required>
                </div>
                <div>
                    <label for="password">รหัสผ่าน:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <p style="text-align:center">ข้อมูลสำหรับการลงชื่อเข้าใช้</p>
                <div class="mb-3 ">
                    <label class="form-label">ประเภทผู้ใช้งาน</label>
                    <select name="usertype" class="form-control">
                        <option value="บุคคลภายใน">บุคคลภายใน</option>
                        <option value="บุคคลภายนอก">บุคคลภายนอก</option>

                </div>
                <p>ชำระค่าสมัครสมาชิก
                    (ต้องชำระเงินก่อนสมัครสมาชิก)
                    รายเดือน
                    รายวัน ค่าสมัคร 50-
                    รายเดือน ค่าสมัคร 150-
                    รายปี
                    รายปี ค่าสมัคร 300-</p>
                <div style="text-align:center;">
                    <input type="submit" value="ชำระเงิน">
                </div>

                <div>
                    <p>ข้อกำหนดและเงื่อนไขในการใช้งาน
                        1. ข้าพเจ้าจะปฎิบัติตนตามข้อบังคับและระเบียบ ของมหาวิทยาลัยโดยเคร่งครัด
                        2. ข้าพเจ้าจะไม่ประพฤติตนในทางที่ก่อให้เกิดอันตรายแบะเสื่อมเสียชื่อเสียงมหาวิทยาลัย
                        3. ข้าพเจ้าจะช่วยรักษาสนาม อุปกรณ์และสิ่งอำนวยความสะดวกของมหาวิทยาลัยและยินดีชดใช้โดยไม่มีข้อแม้ใดๆ
                        หากข้าพเข้าได้ทำสิ่งใดชำรุด สูญหาย
                        4. ข้าพเจ้ายอมรับสภาพว่าข้าพเจ้าเป็นเพียงผู้เข้ามาขอใช้บริการ ดังนั้นหากมีสมาชิกของมหาวิทยาลัยใช้สนาม/อุปกรณ์อยู่
                        ข้าพเจ้าจะไม่เข้าไปแทรกแซงหรือรบกวนอย่างเด็ดขาด
                    </p>
                    <input type="checkbox" id="terms" name="terms" value="agree" required>
                    <label for="terms">ฉันยอมรับเงื่อนไขและข้อตกลง</label>
                </div>
                <div>
                    <input type="submit" name="submit-button" value="สมัครสมาชิก">

                </div>
                <div>
                    <input type="submit" value="ยกเลิก">
                </div>
            </form>

        </div>
    </div>
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
        // Function to validate the email format
        function validateEmail(gmail) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(gmail);
        }

        // Function to validate if the input is a number
        function validateNumber(input) {
            return /^\d+$/.test(input);
        }

        // Check URL for status parameter
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');

        if (status === 'success') {
            Swal.fire({
                title: 'สมัครสมาชิกสำเร็จ!',
                text: 'คุณได้สมัครสมาชิกเรียบร้อยแล้ว',
                icon: 'success',
                confirmButtonText: 'ตกลง'
            });
        } else if (status === 'error') {
            Swal.fire({
                title: 'เกิดข้อผิดพลาด!',
                text: 'ไม่สามารถสมัครสมาชิกได้ กรุณาลองใหม่อีกครั้ง',
                icon: 'error',
                confirmButtonText: 'ตกลง'
            });
        }

        document.getElementById('register-form').addEventListener('submit', function(e) {
            const gmail = document.getElementById('gmail').value;
            const password = document.getElementById('password').value;
            const phone = document.getElementById('phone').value;

            if (!validateEmail(gmail)) {
                Swal.fire({
                    title: 'อีเมลไม่ถูกต้อง!',
                    text: 'กรุณากรอกอีเมลที่ถูกต้อง',
                    icon: 'error',
                    confirmButtonText: 'ตกลง'
                });
                e.preventDefault();
                return;
            }

            // if (!validateNumber(password)) {
            //     Swal.fire({
            //         title: 'รหัสผ่านไม่ถูกต้อง!',
            //         text: 'รหัสผ่านควรเป็นตัวเลขเท่านั้น',
            //         icon: 'error',
            //         confirmButtonText: 'ตกลง'
            //     });
            //     e.preventDefault();
            //     return;
            // }

            if (!validateNumber(phone)) {
                Swal.fire({
                    title: 'เบอร์โทรศัพท์ไม่ถูกต้อง!',
                    text: 'เบอร์โทรศัพท์ควรเป็นตัวเลขเท่านั้น',
                    icon: 'error',
                    confirmButtonText: 'ตกลง'
                });
                e.preventDefault();
                return;
            }
        });
    </script>

</body>

</html>