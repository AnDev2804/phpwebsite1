<?php

// $muestraFen = "AaBbCCDdEEffGGHH";
// $muestraInm = "AABbCcddEEffGgHh";
// $nuevaCad = "";

// if($muestraFen[0]=='A')
// {
//     $nuevaCad = $nuevaCad.'A'.'a';
// }
// else
// {
//     $nuevaCad = $nuevaCad.'a'.'A';
// }
// if($muestraFen[2]=='B')
// {
//     $nuevaCad = $nuevaCad.'B'.'b';
// }
// else
// {
//     $nuevaCad = $nuevaCad.'b'.'B';
// }

//  echo $nuevaCad;

$papa="AABBCCDDEEFFGGHH";
$mama="aabbccddeeffgghh";

$len = strlen(crearDesendencia($papa, $mama));

for($j=0;$j< 64;$j++){
   echo "<br>".crearDesendencia($papa, $mama)."<br>";
}

function crearDesendencia($papa, $mama){

            $a = malditasea("a",$papa,$mama);

            $b = malditasea("b",$papa,$mama);
            
            $c = malditasea("c",$papa,$mama);
            
            $d = malditasea("d",$papa,$mama);
            
            $e = malditasea("e",$papa,$mama);
            
            $f = malditasea("f",$papa,$mama);
            
            $g = malditasea("g",$papa,$mama);
            
            $h = malditasea("h",$papa,$mama);

            $cadeFinal = "";
            
            $cadeFinal = $a[0].$a[1].$b[0].$b[1].$c[0].$c[1].$d[0].$d[1].$e[0].$e[1].$f[0].$f[1].$g[0].$g[1].$h[0].$h[1];

             return $cadeFinal;

    }

function malditasea($letra,$papa, $mama){



if($letra == "a"){

    $papa = $papa[0].$papa[1];
    $mama = $mama[0].$mama[1];
}
if($letra == "b"){

    $papa = $papa[2].$papa[3];
    $mama = $mama[2].$mama[3];
}
if($letra == "c"){

    $papa = $papa[4].$papa[5];
    $mama = $mama[4].$mama[5];
}
if($letra == "d"){

    $papa = $papa[6].$papa[7];
    $mama = $mama[6].$mama[7];
}
if($letra == "e"){

    $papa = $papa[8].$papa[9];
    $mama = $mama[8].$mama[9];
}
if($letra == "f"){

    $papa = $papa[10].$papa[11];
    $mama = $mama[10].$mama[11];
}
if($letra == "g"){

    $papa = $papa[12].$papa[13];
    $mama = $mama[12].$mama[13];
}
if($letra == "h"){

    $papa = $papa[14].$papa[15];
    $mama = $mama[14].$mama[15];
}

$nuevaCad = "";


        $prob =0;
        
        $rand = rand(0,226);
       
            
                if($papa[0] == strtoupper($papa[0]) && $papa[1] == strtolower($papa[1]) &&
                   $mama[0] == strtoupper($mama[0]) && $mama[1] == strtolower($mama[1]))
                    {
                        $prob = 75;
                    }

                if($papa[0] == strtoupper($papa[0]) && $papa[1] == strtoupper($papa[1]) &&
                   $mama[0] == strtoupper($mama[0]) && $mama[1] == strtoupper($mama[1]))
                    {
                        $prob = 125;
                    }
                if($papa[0] == strtolower($papa[0]) && $papa[1] == strtoupper($papa[1]) &&
                   $mama[0] == strtolower($mama[0]) && $mama[1] == strtoupper($mama[1]))
                    {
                        $prob = 175;
                    }
                if($papa[0] == strtolower($papa[0]) && $papa[1] == strtolower($papa[1]) &&
                   $mama[0] == strtolower($mama[0]) && $mama[1] == strtolower($mama[1]))
                    {
                        $prob = 225;
                    }
                else
                    {
                        $prob=25;
                    }
            

                // fenotipo/inmunidad
                for($i=0;$i<=64;$i++)
                    {
                        if($rand < 75 && $rand > $prob){
                                $nuevaCad = $nuevaCad.strtoupper($papa[0]).strtolower($mama[1]);
                            }
                        if($rand < 125 && $rand > $prob){
                                $nuevaCad = $nuevaCad.strtoupper($papa[0]).strtoupper($mama[1]);
                            }
                        if($rand < 175 && $rand > $prob){
                                $nuevaCad = $nuevaCad.strtolower($papa[0]).strtoupper($mama[1]);
                            }
                        if($rand < 225 && $rand > $prob){
                                $nuevaCad = $nuevaCad.strtolower($papa[0]).strtolower($mama[1]);
                            }
                        else{
                            $nuevaCad = $nuevaCad.$papa[0].$mama[1];
                        }

                        
                             return $nuevaCad[0].$nuevaCad[1];
                    }
    }


?>