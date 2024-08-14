<?php
    require('fpdf/fpdf.php');
	$space="\n";
	$pdf = new FPDF();
	//$pdf->SetLeftMargin(70);	
	$pdf->AddPage();	
	$pdf->SetFont('Times','',8);
    $pdf->Cell(40,5,"MUESTRA CROMOSOMICA",1,0);
	$pdf->Cell(50,5,"PROBABILIDAD DE MUESTRA",1,0);
	$pdf->Cell(40,5,"MUESTRA INMUNITARIA",1,0);
	$pdf->Cell(50,5,"PROBABILIDAD DE MUESTRA",1,0);
	$ar=fopen("GENES.TXT","r");
	$arch=fopen("INMU.TXT","r");
	$arch2=fopen("PORCENTAJESFEN.TXT","r");
	$arch3=fopen("PORCENTAJESINM.TXT","r");
	$arch1=fopen("MUESTRAS.TXT","w");
	do
	{
		$l=trim(fgets($ar));
		$a=explode("\n",$l);
		$le=trim(fgets($arch));
		$b=explode("\n",$le);
		$le1=trim(fgets($arch2));
		$d=explode("\n",$le1);
		$le2=trim(fgets($arch3));
		$e=explode("\n",$le2); 
		if(!feof($ar) && !feof($arch))
		{
			fputs($arch1,$a[0] ." ".$d[0]." ". $b[0]." " .$e[0] . "\n");
		}
		else
		{
			fputs($arch1,$a[0] ." ".$d[0]." ". $b[0]." " .$e[0]);
		}
	}while(!feof($ar) && !feof($arch) && !feof($arch2) && !feof($arch3));
	fclose($ar);
	fclose($arch);
	fclose($arch1);
	$arch4=fopen("MUESTRAS.TXT","r");
	while(!feof($arch4))
	{
		$le=trim(fgets($arch4));
		$c=explode(" ",$le);
		$pdf->Ln();
		$pdf->Cell(40,5,$c[0],1,0);
		$pdf->Cell(50,5,$c[1],1,0);
		$pdf->Cell(40,5,$c[2],1,0);
		$pdf->Cell(50,5,$c[3],1,0);
	}
	/*for($i=0;$i<16;$i++)
	{
		$pdf->Ln();
		$pdf->Cell(40,5,$c[0],1,0);
		$pdf->Cell(50,5,$c[1],1,0);
		$pdf->Cell(40,5,$c[2],1,0);
		$pdf->Cell(50,5,$c[3],1,0);
	}*/
	$pdf->Output();
	fclose($arch4);
	fclose($arch2);
	fclose($arch3);
?>