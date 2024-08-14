<?php
	require('fpdf/fpdf.php');
	$pdf = new FPDF();	
	$pdf->AddPage();
	$pdf->SetFont('Times','',8);
    $pdf->Cell(40,6,"MUESTRA",1,0,'C');
    $pdf->Cell(60,6,"NOMBRE DE USUARIO DEL DONANTE",1,0,'C');
    $pdf->Cell(40,6,"PROFESION DEL DONANTE",1,0,'C');
    $pdf->Cell(55,6,"CORREO ELECTRONICO DEL DONANTE",1,0,'C');	
	$pdf->Ln();
    $ar=fopen("POSDON.TXT","r") or die("Error de Lectura...");
    while(!feof($ar))
    {
        $li=trim(fgets($ar));
        $a=explode("\n",$li);
        $b=implode("\n",$a);
        $c=explode(";",$b);
        $pdf->Cell(40,7,$c[0],1,0,'C');
        $pdf->Cell(60,7,$c[1],1,0,'C');
        $pdf->Cell(40,7,$c[2],1,0,'C');
        $pdf->Cell(55,7,$c[3],1,0,'C');
        $pdf->Ln();
    }
    fclose($ar);
    $pdf->SetFont('Times','',14);
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Cell(0,6,"________________________________________________",0,1,'C');
    $pdf->Ln();
    $pdf->Cell(0,6,"FIRMA DE LA SOLICITANTE.",0,1,'C');
    $pdf->Output();
?>