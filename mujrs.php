<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="keywords" content="In vitro, solteras, single, viudas, fecundacion, fecundation, embrios, EMBRIOS, Embrios">
            <title>EMBRIOS DESCENDENCIA PARA MUJERES SOLTERAS</title>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="mujrs.css">
        </head>
        <body>
            <?php
                error_reporting(0);
                $nombre=$_POST['nombre']; $apellido=$_POST['apellido']; $prof=strtoupper($_POST['profesion']);
                $oj=$_POST['ojos']; $pi=$_POST['piel']; $es=$_POST['estatura']; $ccab=$_POST['ccabello']; $con=$_POST['contextura']; $fdc=$_POST['fcara'];
                $mmus=$_POST['mmusc']; $vel=$_POST['vellosidad'];
                if($nombre==NULL || $apellido==NULL || $oj==NULL || $pi==NULL || $es==NULL || $ccab==NULL || $con==NULL || $fdc==NULL || $mmus==NULL || $vel==NULL)
                {
                    echo "<div class='p-3 mb-2 bg-danger text-white' id='divi2'><h1>ERROR FATAL :(<br><br>RELLENE DE FORMA CORRECTA LOS DATOS DEL FORMULARIO</h1><br><br><button type='button' class='btn btn-primary' id='boton1'><a href='MUJERESS.html'>VOLVER</a></button></div>";
                }
                if($nombre!=NULL && $apellido!=NULL && $oj!=NULL && $pi!=NULL && $es!=NULL && $ccab!=NULL && $con!=NULL && $fdc!=NULL && $mmus!=NULL && $vel!=NULL)
                {
                    $ar=fopen("MUESTRA.TXT","r");
                    $arch2=fopen("MSOLT.TXT","w");
                    while(!feof($ar))
                    {
                        $l=fgets($ar);
                        $a=explode(";",$l);
                        if(!feof($ar))
                        {
                            fputs($arch2,$a[1]);
                        }
                        else
                        {
                            fputs($arch2,$a[1]);
                        }
                    }
                    fclose($ar);
                    fclose($arch2);
                    $ar2=fopen("MSOLT.TXT","r");
                    $ar3=fopen("MSOL.TXT","w");
                    while(!feof($ar2))
                    {
                        $li=fgets($ar2);
                        $b=explode(":",$li);
                        if(!feof($ar2))
                        {
                            fputs($ar3,$b[0] . "\n");
                        }
                        else
                        {
                            fputs($ar3,$b[0]);
                        }
                        
                    }
                    fclose($ar2);
                    fclose($ar3);
                    $ar4=fopen("MSOL.TXT","r");
                    $ar5=fopen("DONANTE.TXT","r");
                    $ar6=fopen("POSDON.TXT","w");
                    $cont=0;
                    $aux=0;
                    $total=[];
                    while(!feof($ar4))
                    {
                        $l1=trim(fgets($ar4));
                        $c=explode("\n",$l1);
                        $d=implode("\n",$c);
                        $l2=trim(fgets($ar5));
                        $e=explode(";",$l2);
                        if($prof==NULL && $d[1]==$oj && $d[3]==$pi && $d[5]==$es && $d[7]==$ccab && $d[9]==$con && $d[11]==$fdc && $d[13]==$mmus && $d[15]==$vel)
                        {
                            fputs($ar6,$total[]=$d . ";" . $e[1] . ";". $e[2] . ";". $e[3]);
                            fputs($ar6,"\n");
                            $cont++;
                        }
                        if($prof!=NULL && $d[1]==$oj && $d[3]==$pi && $d[5]==$es && $d[7]==$ccab && $d[9]==$con && $d[11]==$fdc && $d[13]==$mmus && $d[15]==$vel && $e[2]==$prof)
                        {
                            fputs($ar6,$total[]=$d . ";" . $e[1] . ";". $e[2] . ";". $e[3]);
                            fputs($ar6,"\n");
                            $cont++;
                        }
                    }
                    fclose($ar6);
                    $ar7='POSDON.TXT';
                    $content=file_get_contents($ar7);
                    $content=rtrim($content,"\n");
                    file_put_contents($ar7,$content);
                    if($cont>0)
                    {
                        echo "<div class='p-3 mb-2 bg-success bg-gradient text-white' id='divi0'><h1>¡FELICIDADES Sra. $apellido!</h1><br><br><h2>DONANTES ENCONTRADOS CON ÉXITO</h2><br><br><h2>Para ver los resultados en un archivo PDF y descargarlos haga click en ''Ver PDF''.<br><br>Si desea volver presione en ''Volver''</h2><br><br>
                        <button type='button' class='btn btn-primary'><a href='mujsoltPDF.php'>VER PDF</a></button><button type='button' class='btn btn-primary' id='boton0'><a href='MUJERESS.html'>VOLVER</a></button></div>";
                    }
                    if($cont==0)
                    {
                        echo "<div class='p-3 mb-2 bg-danger text-white' id='divi0'><h1>Lo sentimos Sra. $apellido</h1><br><br><h2>No hubo ningún donante encontrado con los requisitos que pidió</h2><br><br><h2>Si desea volver presione en ''Volver''</h2><br><br>
                        </button><button type='button' class='btn btn-primary' id='boton0'><a href='MUJERESS.html'>VOLVER</a></button></div>";
                    }
                }
            ?>
        </body>
        <footer><div class="pie">EMBRIOS Derechos Reservados &copy; 1993-2023<br><br></div></footer>
    </html>