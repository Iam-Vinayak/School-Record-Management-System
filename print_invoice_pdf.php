<?php


include('./config/db_connect.php');

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['format' => 'A4']);

ob_start(); // Start output buffering

// Include the PHP file directly
include('print_fee_invoice.php');

$content = ob_get_clean(); // Get the contents of the output buffer and clean it

$mpdf->WriteHTML($content);
$mpdf->Output();
?>



