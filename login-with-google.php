<?php
include("dbconnect.php");

require_once 'google-api-php-client/vendor/autoload.php';
$client = new Google_Client(['client_id' => '513129400585-2g6hr7kgqq2mr7vu3dt8umffq7gmf4nu.apps.googleusercontent.com']);

$credential = $_POST['credential'];


try {
    $payload = $client->verifyIdToken($credential);
    if ($payload) {
        $personID = $payload['sub'];
        $email = $payload['email'];

        // ตรวจสอบว่าผู้ใช้มีอยู่ในฐานข้อมูลหรือไม่
        $sql = "SELECT * FROM person WHERE gmail = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // ผู้ใช้มีอยู่แล้ว
            session_start();
            $_SESSION['islogin'] = true;
            $row = $result->fetch_assoc();
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['gmail'] = $row['gmail'];
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
            // ผู้ใช้ยังไม่ลงทะเบียน
            $sql = "INSERT INTO person (gmail, firstname, lastname) VALUES (?, ?, ?)";
            $stmt = $connection->prepare($sql);
            $firstname = $payload['given_name'];
            $lastname = $payload['family_name'];
            $stmt->bind_param('sss', $email, $firstname, $lastname);
            if ($stmt->execute()) {
                session_start();
                $_SESSION['islogin'] = true;
                $_SESSION['firstname'] = $firstname;
                $_SESSION['lastname'] = $lastname;
                $_SESSION['gmail'] = $email;
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
                echo json_encode(['error' => 'Failed to register user']);
            }
        }
    } else {
        http_response_code(401);
        echo json_encode(['error' => 'Invalid ID token']);
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Error: ' . $e->getMessage()]);
}

?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>