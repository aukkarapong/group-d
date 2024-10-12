<?php
// phpinfo();
// exit;
// soap

// URL ของ WSDL ที่จะใช้
$wsdl = "https://fin.ku.th/qr/xml/qr.wsdl";

$qrImage = "";

try {
    // สร้าง SoapClient instance
    $client = new SoapClient($wsdl);

    // เรียกใช้ฟังก์ชันจาก API
    $params = array(
        "expireDate" => "180824",
        "appCode" => "99",
        "transactionId" => uniqid(),
        "amount" => 100.0,
        "ref1Prefix" => "11223344556677889",
        "ref2Prefix" => "112233",
        "billerSuffix" => "87",
        "callbackUrl" => ""
    );

    $response = $client->__soapCall("getOeaQr", array($params));

    // แสดงผลลัพธ์
    // echo '<pre />';
    // print_r($response);
    // exit;
    $qrImage = $response->qrResult->content;
} catch (SoapFault $e) {
    // จัดการกับข้อผิดพลาด
    echo "Error: " . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Layout | AdminLTE 4</title><!--begin::Primary Meta Tags-->

</head> <!--end::Head--> <!--begin::Body-->

<body class=""> <!--begin::App Wrapper-->
    <img src="<?php echo $qrImage; ?>" style="max-width: 400px;" />
</body><!--end::Body-->

</html>