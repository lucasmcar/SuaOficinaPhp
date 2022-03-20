<?php

require('../vendor/autoload.php');


use Dompdf\Dompdf;


$mPdf = new Dompdf();

ob_start();
require_once('../templates/pdf_model.php');
$mPdf->loadHtml(ob_get_clean());
$mPdf->setBasePath('../../templates/css/bootstrap.min.css');

$mPdf->setPaper("A4");

$mPdf->render();
header('Content-Type: application/pdf');
$mPdf->output();
$mPdf->stream('orcamento.pdf', ["Attachment" => false]);
