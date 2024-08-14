<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <meta name="keywords" content="In vitro, Fecundacion, Fecundation, Register, Registro">
            <title>EMBRIOS REGISTRO</title>
            <link rel="stylesheet" href="reg.css">
        </head>
        <body class="page">
<?php
    $ar=fopen("DONANTE.TXT","r") or die("Error de lectura...");
    while(!feof($ar))
    {
        $li=trim(fgets($ar));
        if($li!=NULL)
            $c=explode(";",$li);
    }
    $s=$c[0]+1;
    echo "<center><h1 class='tit1'>ACTUALMENTE HAY REGISTRADOS EN TOTAL</h1><br>";
    echo "<h1 class='tit2'>$c[0]</h1>" . "<br>" . "<h2 class='tit3'>DONANTES<br><br><a>Le recordamos que su Número de Donante es el número mostrado + 1. Es decir $s.</h2>";
    echo "<br>";
    echo "<h2><a class='tit4' href='DONANTE.html'>Volver</a></h2>";
    fclose($ar);
?>
</body>
</html>