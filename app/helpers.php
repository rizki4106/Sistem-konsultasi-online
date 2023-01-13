<?php

use Barryvdh\DomPDF\ServiceProvider as PDF;

/**
 * mengubah file docs menjadi pdf
 * @param str docs_path -> lokasi tempat penyimpanan dokumen
 * @param str output_path -> tempat peyimpanan file pdf beserta nama file nya contoh docs/dokumen.pdf
 */
function docs_to_pdf($docs_path, $output_path){

    /* Set the PDF Engine Renderer Path */
    $domPdfPath = base_path('vendor/dompdf/dompdf');
    \PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
    \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');
        
    //Load word file
    $Content = \PhpOffice\PhpWord\IOFactory::load(public_path($docs_path)); 

    //Save it into PDF
    $PDFWriter = \PhpOffice\PhpWord\IOFactory::createWriter($Content,'PDF');
    $PDFWriter->save(public_path($output_path)); 
}