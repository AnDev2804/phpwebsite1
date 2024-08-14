<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="keywords" content="In vitro, Fecundacion, Fecundation, Register, Registro">
            <title>EMBRIOS DESCENDENCIA PARA PAREJAS</title>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="parej.css">
        </head>
        <body>
            <center>
                <?php
                        $nom=$_POST['nom'];$a=$_POST['ap'];$g=$_POST['gen'];$in=$_POST['inm'];

                        $nom2=$_POST['nom2'];$a2=$_POST['ap2'];$g2=$_POST['gen2'];$in2=$_POST['inm2'];
                        if($nom==NULL||$a==NULL||$g==NULL||$in==NULL||
                        $nom2==NULL||$a2==NULL||$g2==NULL||$in2==NULL)
                        {
                            echo "<div class='p-3 mb-2 bg-danger text-white'><h1>ERROR 404 :(<br><br>USTED INGRESÓ UN DATO ERRÓNEO O NULO</h1><br><br><h5><a href='PAREJAS.html'>Volver</a></h5></div>";
                        }
                        else if(strlen($nom)>2&&strlen($a)>1&&strlen($g)==16&&strlen($in)==16&&
                        strlen($nom2)>2&&strlen($a2)>1&&strlen($g2)==16&&strlen($in2)==16)
                        {
                            gen($g,$g2);
                            inm($in,$in2);
                            echo "<div class='p-3 mb-2 bg-success text-white'><h3>COMBINACIONES POSIBLES DE DESCENDENCIA CREADAS CON ÉXITO Sr. $a Y Sra. $a2.</h3><br><br><br><h4>Para ver el documento PDF con todas las posibles combinaciones de descendencia presione el siguiente botón.</h4><br><br><br><h5><a href='parpdf.php'>VER PDF</a></h5><br><br><br></div>";
                        }
                        else
                        {
                            echo "<div class='p-3 mb-2 bg-danger text-white'><h1>Usted ingresó un dato erróneo o nulo en uno de los formularios, vuelta a intentar.</h1><br><br><h5><a href='PAREJAS.html'>Volver</a></h5>";
                        }
                        function gen($str1,$str2)
                            {
                                $cA=[];$cB=[];$cC=[];$cD=[];$cE=[];$cF=[];$cG=[];$cH=[];
                                $cA=[$str1[0] . $str2[0],$str1[0] . $str2[1],$str1[1] . $str2[0],$str1[1] . $str2[1]];
                                $cB=[$str1[2] . $str2[2], $str1[2] . $str2[3], $str1[3] . $str2[2], $str1[3] . $str2[3]];
                                $cC=[$str1[4] . $str2[4], $str1[4] . $str2[5], $str1[5] . $str2[4], $str1[5] . $str2[5]];
                                $cD=[$str1[6] . $str2[6], $str1[6] . $str2[7], $str1[7] . $str2[6], $str1[7] . $str2[7]];
                                $cE=[$str1[8] . $str2[8], $str1[8] . $str2[9], $str1[9] . $str2[8], $str1[9] . $str2[9]];
                                $cF=[$str1[10] . $str2[10], $str1[10] . $str2[11], $str1[11] . $str2[10], $str1[11] . $str2[11]];
                                $cG=[$str1[12] . $str2[12], $str1[12] . $str2[13], $str1[13] . $str2[12], $str1[13] . $str2[13]];
                                $cH=[$str1[14] . $str2[14], $str1[14] . $str2[15], $str1[15] . $str2[14], $str1[15] . $str2[15]];
                                $comb=[];
                                foreach($cA as $ca)
                                {
                                    foreach($cB as $cb)
                                    {
                                        foreach($cC as $cc)
                                        {
                                            foreach($cD as $cd)
                                            {
                                                foreach($cE as $ce)
                                                {
                                                    foreach($cF as $cf)
                                                    {
                                                        foreach($cG as $cg)
                                                        {
                                                            foreach($cH as $ch)
                                                            {
                                                                $comb[]=$ca . $cb . $cc . $cd . $ce . $cf . $cg . $ch;
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                $frc=frecg($comb);
                            }
                            function frecg($array)
                                {
                                    $arch=fopen("GENES.TXT","w");
                                    $arch2=fopen("PORCENTAJESFEN.TXT","w");

                                    $cont=0;
                                    $cont1=0;
                                    $frecuencias = array();
                                    $totalElementos = count($array);
                                        foreach ($array as $elemento)
                                        {
                                            if (isset($frecuencias[$elemento])) {
                                                $frecuencias[$elemento]++; 
                                            } else {
                                                $frecuencias[$elemento] = 1;
                                            }
                                        }
                                        arsort($frecuencias);
                                        foreach ($frecuencias as $elemento => $frecuencia) 
                                        {
                                            $cont1++;
                                        }
                                        foreach($frecuencias as $elemento => $frecuencia)
                                        {
                                            $cont++;
                                            $porcentaje = ($frecuencia / $totalElementos) * 100;
                                            if($cont!=$cont1)
                                            {
                                                fputs($arch,$elemento . "\n");
                                                fputs($arch2,$porcentaje ."%". "\n");

                                            }
                                            else
                                            {
                                                fputs($arch,$elemento);
                                                fputs($arch2,$porcentaje."%");

                                            }
                                        }
                                    fclose($arch);
                                    fclose($arch2);

                                }
                            function inm($str1,$str2)
                            {
                                $cA=[];$cB=[];$cC=[];$cD=[];$cE=[];$cF=[];$cG=[];$cH=[];
                                $cA=[$str1[0] . $str2[0], $str1[0] . $str2[1], $str1[1] . $str2[0], $str1[1] . $str2[1]];
                                $cB=[$str1[2] . $str2[2], $str1[2] . $str2[3], $str1[3] . $str2[2], $str1[3] . $str2[3]];
                                $cC=[$str1[4] . $str2[4], $str1[4] . $str2[5], $str1[5] . $str2[4], $str1[5] . $str2[5]];
                                $cD=[$str1[6] . $str2[6], $str1[6] . $str2[7], $str1[7] . $str2[6], $str1[7] . $str2[7]];
                                $cE=[$str1[8] . $str2[8], $str1[8] . $str2[9], $str1[9] . $str2[8], $str1[9] . $str2[9]];
                                $cF=[$str1[10] . $str2[10], $str1[10] . $str2[11], $str1[11] . $str2[10], $str1[11] . $str2[11]];
                                $cG=[$str1[12] . $str2[12], $str1[12] . $str2[13], $str1[13] . $str2[12], $str1[13] . $str2[13]];
                                $cH=[$str1[14] . $str2[14], $str1[14] . $str2[15], $str1[15] . $str2[14], $str1[15] . $str2[15]];
                                $comb=[];
                                foreach($cA as $ca)
                                {
                                    foreach($cB as $cb)
                                    {
                                        foreach($cC as $cc)
                                        {
                                            foreach($cD as $cd)
                                            {
                                                foreach($cE as $ce)
                                                {
                                                    foreach($cF as $cf)
                                                    {
                                                        foreach($cG as $cg)
                                                        {
                                                            foreach($cH as $ch)
                                                            {
                                                                $comb[]=$ca . $cb . $cc . $cd . $ce . $cf . $cg . $ch;
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                $frc=freci($comb);
                            }
                            function freci($array)
                                {
                                    $arch=fopen("INMU.TXT","w");
                                    $arch2=fopen("PORCENTAJESINM.TXT","w");
                                    $cont=0;
                                    $cont1=0;
                                    $frecuencias = array();
                                    $totalElementos = count($array);
                                        foreach ($array as $elemento)
                                        {
                                            if (isset($frecuencias[$elemento])) {
                                                $frecuencias[$elemento]++; 
                                            } else {
                                                $frecuencias[$elemento] = 1;
                                            }
                                        }
                                        arsort($frecuencias);
                                        foreach ($frecuencias as $elemento => $frecuencia) 
                                        {
                                            $cont1++;
                                        }
                                        foreach($frecuencias as $elemento => $frecuencia)
                                        {
                                            $cont++;
                                            $porcentaje = ($frecuencia / $totalElementos) * 100;
                                            if($cont<$cont1)
                                            {
                                                fputs($arch,$elemento  . "\n");
                                                fputs($arch2,$porcentaje ."%". "\n");
                                            }
                                            else
                                            {
                                                fputs($arch,$elemento);
                                                fputs($arch2,$porcentaje."%");
                                            }
                                        }
                                    fclose($arch);
                                    fclose($arch2);
                                }
                ?>
        </body>
        </html>
