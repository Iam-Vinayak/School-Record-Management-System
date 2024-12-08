<?php

include('./config/db_connect.php');

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();


$html = file_get_contents("print_fee_invoice.php");

$mpdf->WriteHTML($html);
$mpdf->Output();


?>