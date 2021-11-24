<?php
include '../../core/auth.php';
include "../common/helper.php";
header('Content-type: text/html; charset=utf-8');

if (!checkLogin()) {
    header("Location: ../../login");
    return;
}
if ($_SESSION["cart"] == []) {
    sleep(3);
    header("Location: ../../product-list");
    return;
}

if ($_POST["amount"] < 10000 || $_POST["amount"] > 50000000) {
    sleep(3);
    header("Location: ../../cart.php");
    return;
}

$array = parse_ini_file("../config.ini");


$endpoint = "https://test-payment.momo.vn/gw_payment/transactionProcessor";


$partnerCode = $array["partnerCode"];
$accessKey = $array["accessKey"];
$secretKey = $array["secretKey"];
$orderInfo = $array["orderInfo"];
$returnUrl = $array["returnUrl"];
$notifyUrl = $array["notifyUrl"];
$extraData = $array["extraData"];
$requestType = $array["requestType"];


if (!empty($_POST)) {
    // $partnerCode = $_POST["partnerCode"];
    // $accessKey = $_POST["accessKey"];
    // $secretKey = $_POST["secretKey"];
    // $orderId = $_POST["orderId"]; // Mã đơn hàng
    // $orderInfo = $_POST["orderInfo"];
    // $notifyUrl = $_POST["notifyUrl"];
    // $returnUrl = $_POST["returnUrl"];
    // $extraData = $_POST["extraData"];
    
    $userId = $_SESSION['user']['userId'];
    $orderId = "$userId".time();
    $amount = $_POST["amount"];
    $requestId = "$userId".time();
    // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
    //before sign HMAC SHA256 signature
    $rawHash = "partnerCode=" . $partnerCode . "&accessKey=" . $accessKey . "&requestId=" . $requestId . "&amount=" . $amount . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&returnUrl=" . $returnUrl . "&notifyUrl=" . $notifyUrl . "&extraData=" . $extraData;
    $signature = hash_hmac("sha256", $rawHash, $secretKey);
    $data = array('partnerCode' => $partnerCode,
        'accessKey' => $accessKey,
        'requestId' => $requestId,
        'amount' => $amount,
        'orderId' => $orderId,
        'orderInfo' => $orderInfo,
        'returnUrl' => $returnUrl,
        'notifyUrl' => $notifyUrl,
        'extraData' => $extraData,
        'requestType' => $requestType,
        'signature' => $signature);
    $result = execPostRequest($endpoint, json_encode($data));
    $jsonResult = json_decode($result, true);  // decode json

    //Just a example, please check more in there
    
    header('Location: ' . $jsonResult['payUrl']);
}
?>