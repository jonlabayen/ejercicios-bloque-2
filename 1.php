<!DOCTYPE html>
<html>
    <head>
        <title>Arrays</title>
    </head>
    <body>

        <?php
    // crear primer array y rellenarlo
    $array=[10];
    $cont=0;
    while($cont<=10){
        $array[$cont]=$cont;
        $cont++;
    }
        
    // crear segundo array y rellenarlo con el factorial del primero
        $array2=[10];
        $cont=0;
        $resultado=1;
        $aux=0;
        while($cont<=10){
            while($aux<=$cont){
                $resultado=$resultado*$cont;
                $aux++;

            }
            $array2[$cont]=$resultado;
            $aux=1;
            $resultado=1;
            $cont++;
        }


        // printar resultados recorriendo los dos arrays

        $cont=0;
        while($cont<=10){
          echo $array[$cont] . $array2[$cont];
          echo "<br>";
          $cont++;
        }