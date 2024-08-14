<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="keywords" content="In vitro, Index, questions, preguntas, respuestas, answers, EMBIOS, embrios, Embrios, Fecundacion, Fecundation, fecundacion, fecundation, venezuela, vzla">
            <title>EMBRIOS PÁGINA PRINCIPAL</title>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="embriosQ&Aphp.css">
        </head>
        <body>
            <div class="cabecera"><img src="embrios logo.jpg" class="img1"><a href="embriosINDEX.html"><img src="globo.png" class="img2"></a><a href="https://www.google.com/maps/place/Hospital+de+Clínicas+Caracas/@10.5097364,-66.8992856,19.25z/data=!4m14!1m7!3m6!1s0x8c2a5933c9a17fd3:0xaadf5f044b56b763!2sHospital+de+Clínicas+Caracas!8m2!3d10.5098859!4d-66.8988688!16s%2Fg%2F1z44bx5h_!3m5!1s0x8c2a5933c9a17fd3:0xaadf5f044b56b763!8m2!3d10.5098859!4d-66.8988688!16s%2Fg%2F1z44bx5h_?hl=es&entry=ttu"><img src="ubication.jpg" class="img3"></a></div>
            <div class="divi">
                <nav class="menu">
                    <ul>
                        <span id="tooltip">Contacto</span>
                        <div class="tooltip-box"><p class="tit">TELÉFONO</p><br>(0212)-5086234<br><br><p class="tit">CORREOS ELECTRÓNICOS</p><br>embriosca@gmail.com<br>embrioslab@hotmail.com</div>
                        <li><a href="embriosINDEX.html" class="q">Principal</a></li>
                        <li><a href="DONANTE.html" class="q">Registro de Donantes</a></li>
                        <li><a href="PAREJAS.html" class="q">Descendencias para Parejas</a></li>
                        <li><a href="MUJERESS.html" class="q">Descendencias para Mujeres Solteras</a></li>
                        <li><a href="embriosQ&A.html" class="q">Q&A</a></li>
                    </ul>
                </nav>
            </div>
            <?php
                $correo=$_POST['corr'];
                $pregunta=$_POST['preg'];
                if($correo!=NULL && $pregunta!=NULL)
                {
                    $ar=fopen("PREGUNTA.TXT","a");
                    fputs($ar,$correo . ":" . $pregunta . "\n");
                    fclose($ar);
                    echo "<center><div class='divi1'><h1><br><br><br>Su pregunta ha sido almacenada en el sistema<br><br><br>Responderemos lo más pronto posible<br><br><br></h1></div></center";
                }
                else
                {
                    echo "<center><div class='divi1'><h1><br><br>Su pregunta no ha sido almacenada en el sistema<br><br><br>Rellene de forma correcta el formulario<br><br></h1><a class='volv' href='embriosQ&A.html'>Volver</a></div></center";
                }
            ?>
        </body>
        <footer><div class="pie">EMBRIOS Derechos Reservados &copy; 1993-2023<br><br></div></footer>
    </html>