<?php
include('dbconnect.php');


foreach ($username as $idusername): ?>
    <tr>
        <td><?php echo $idusername['name']; ?></td>
        <td>
            <!-- ฟอร์มเพื่อส่ง ID สมาชิกผ่าน POST -->
            <form action="page2.php" method="POST">
                <input type="hidden" name="member_id" value="<?php echo $idusername['id']; ?>">
                <button type="submit">แก้ไข</button>
            </form>
        </td>
    </tr>
<?php endforeach;

// เขียนคำสั่ง sql
$sql = "SELECT * FROM person ORDER BY idusername ASC";

//สร้างตัวแปรแบบ Array มารับข้อมูลที่ได้จากฐานข้อมูล
$adminList = [];

// & สั่งรันคำสั่ง sql
$result = $connection->query($sql);
if ($result && $result->num_rows > 0) {
    $adminList = $result->fetch_all(MYSQLI_ASSOC);
}
// echo '<pre>';
// print_r($adminList);
// exit;

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
            <div class="card mb-4">
                <div class="card-header">
                    <div class="container-fluConcertID">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3 class="mb-0">ข้อมูลสมาชิก</h3>
                            </div>
                            <div class="col-sm-6 text-end">
                                <button class="btn btn-warning" onclick="location.href='#'"><i class="bi bi-plus"></i>ต่ออายุสมาชิก</button>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">IDUSERNAME</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>PHONE</th>
                                <th>GMAIL</th>
                                <!-- <th>PASSWORD</th> -->
                                <th>USERTYPE</th>
                                <th>USERNAME</th>

                                <th style="width: 80px">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($adminList  as $index => $adminData) {

                            ?>
                                <tr class="align-middle">
                                    <td><?php echo $adminData['idusername']; ?></td>
                                    <td><?php echo $adminData['firstname']; ?></td>
                                    <td><?php echo $adminData['lastname']; ?></td>
                                    <td><?php echo $adminData['phone']; ?></td>
                                    <td><?php echo $adminData['gmail']; ?></td>
                                    <!-- <td><?php echo $adminData['password']; ?></td> -->
                                    <td><?php echo $adminData['usertype']; ?></td>
                                    <td><?php echo $adminData['username']; ?></td>

                                    <!-- <td><span class="badge text-bg-danger">55%</span></td> -->
                                    <td>
                                        <a href="data_edit.php?id=<?php echo $adminData['idusername']; ?>">
                                            <i class="bi bi-pencil-square" style="cursor: pointer;"></i>
                                        </a>
                                        <!-- <a href="admin_list.php?id=<?php echo $adminData['id']; ?>"> -->
                                        <i class="bi bi-x-circle" style="cursor: pointer;" onclick="deleteAdmin(<?php echo $adminData['idusername']; ?>)"></i>
                                        <!-- </a> -->
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div> <!-- /.card-body -->
            </div> <!-- /.card -->
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