<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->loadHtml('Nama : Saffa Salsabilla. Inilah hasil tugas 
Membuat Library Dompdf untuk Membuat Report PDF dengan DOMPDF');

$dompdf->setPaper('A4' , 'landscape');

$dompdf ->render();

$dompdf->stream('hasil_reportt.pdf');
?>