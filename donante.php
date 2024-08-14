<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="keywords" content="In vitro, Fecundacion, Fecundation, Register, Registro">
            <link rel="stylesheet" href="donreg.css">
            <title>EMBRIOS REGISTRO</title>
        </head>
        <body>
            <?php
                $num=$_POST['codigo'];
                $prof=$_POST['profesion'];
                $gen=$_POST['muestra1'] .":". $_POST['muestra2'];
                $correo="@GMAIL.COM";
                $donante="DONANTE_";
                $id=$donante . $num;
                $gmail=$donante . $num . $correo;
                $ar=fopen("DONANTE.TXT","r") or die("Error...");
                while(!feof($ar))
                {
                    $li=fgets($ar);
                        $v=explode(";",$li);
                }
                fclose($ar);
                $ar=fopen("DONANTE.TXT","a") or die("Error...");
                    if($num==NULL||$prof==NULL||$gen==NULL)
                            {
                                echo "<h1 class='error'>ERROR 404 :(<br><br>DATOS ERRÓNEOS O NULOS</h1>";
                            }
                        else if($v[0]!=$num)
                        {
                            if($num>$v[0]&&$num==$v[0]+1&&strlen($prof)>2&&strlen($gen)==33)
                            {
                                fputs($ar,"\n");
                                $v[0]=$num; $v[1]=$id; $v[2]=$prof; $v[3]=$gmail;
                                for($i=0;$i<4;$i++)
                                {
                                    if($i<3)
                                    {
                                        fputs($ar,$v[$i] . ";");
                                    }
                                    else
                                    {
                                        fputs($ar,$v[$i]);
                                    }
                                    
                                }
                                echo "<center><h1>REGISTRO EXITOSO</h1><br><br>";
                                echo "<center><table border=1 class='tabla'>";
                                echo "<tr>
                                            <td align='right'><h3>NUMERO</h3></td>
                                            <td><h3>ID DONANTE</h3></td>
                                            <td><h3>PROFESION</h3></td>
                                            <td><h3>CORREO</h3></td>
                                            <td><h3>MUESTRA GENERADA</h3></td>
                                    </tr>";
                                echo "<tr>
                                            <td align='right' class='tabla2'>$num</td>
                                            <td class='tabla2'>$id</td>
                                            <td class='tabla2'>$prof</td>
                                            <td class='tabla2'>$gmail</td>
                                            <td class='tabla2'>$gen</td>
                                    </tr>";
                                echo "</table><center>";
                                echo "<br><h2><a href='DONANTE.html' class='volver'>Volver</a></h2>";
                            }
                            else
                            {
                                echo "<h1 class='error'>USTED INGRESÓ UN DATO INCORRECTO O NULO</h1>";
                            }
                        }
                        else if($v[0]==$num)
                        {
                            
                            echo "<h1 class='error'>ADVERTENCIA, CODIGO DE DONANTE YA REGISTRADO</h1>";
                            echo "<h1 class='error'> EL CÓDIGO DE DONANTE $v[0] YA ESTÁ REGISTRADO.</h1>";
                        }
                        
                fclose($ar);
                $ar=fopen("MUESTRA.TXT","r") or die("Error...");
                while(!feof($ar))
                {
                    $li=fgets($ar);
                        $v=explode(";",$li);
                }
                fclose($ar);
                $ar=fopen("MUESTRA.TXT","a") or die("Error...");
                    if($num==NULL||$prof==NULL||$gen==NULL)
                    {
                        echo "<br><h2><center><a href='DONANTE.html' class='volver'>Volver</a></h2>";
                    }
                    else if($v[0]!=$num)
                    {
                        if($num>$v[0]&&$num==$v[0]+1&&strlen($prof)>2&&strlen($gen)==33)
                        {
                            fputs($ar,"\n");
                            $v[0]=$num; $v[1]=$gen;
                            for($i=0;$i<2;$i++)
                            {
                                if($i<1)
                                {
                                    fputs($ar,$v[$i] . ";");
                                }
                                else
                                {
                                    fputs($ar,$v[$i]);
                                }
                            }
                        }
                        else
                        {
                            echo "<br><h2><center><a href='DONANTE.html' class='volver'>Volver</a></h2>";
                        }
                    }
                    else
                    {
                        echo "<br><center><h2><a href='DONANTE.html' class='volver'>Volver</a></h2>";
                    }
                fclose($ar);
            ?>
        </body>
    </html>