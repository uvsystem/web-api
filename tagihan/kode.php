<?php
include("../root.php");

$requestBody = file_get_contents("php://input");
$obj = json_decode($requestBody);
$request = $target . "/pembayaran/perusahaan/" . $obj->idPerusahaan . "/pelanggan/kode/" . $obj->kode . "/payable";

$response = file_get_contents($request);

echo $response;
?>
