<?php

require_once '../vendor/autoload.php';
require_once '../model/superhero.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try {
    $superhero = new SuperHero();
    ob_start();

    //Variables
    $logo = 'images/senati-peru.jpg';
    $listaSuperHeroes = $superhero->getSuperHeroList($_GET['publisherId']);
    $casa = $_GET['casa'];

    //Hoja de estilos (clases CSS)
    include 'estilos.report.html';
    //Esquema de reporte
    include 'superhero.data.php';

    $content = ob_get_clean();

    $html2pdf = new Html2Pdf('P', 'A4', 'es');
    $html2pdf->writeHTML($content);
    $html2pdf->output('superheroes.pdf');
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
