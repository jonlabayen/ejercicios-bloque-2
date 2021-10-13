<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

    <?php

        $str = "Enero Febrero Marzo Abril Mayo Junio Julio Agosto Septiembre Octubre Noviembre Diciembre";
        $meses= explode(" ", $str);
        $length=count($meses);
        
        $mesesAsociativo=array();
        for ($i=0; $i < $length ; $i++) { 

            $mesesAsociativo[$meses[$i]]="Mikel Ainara Xabi";
        }

        $nombre=" Imanol";
        $nombre2=" Unai";
        $mes1=1;
        $mes2=4;

        $mesesAsociativo[$meses[$mes1]]= $mesesAsociativo[$meses[$mes1]].$nombre;
        $mesesAsociativo[$meses[$mes2]]= $mesesAsociativo[$meses[$mes2]].$nombre2;
        $claves=array_keys($mesesAsociativo);
        for ($i=0; $i < $length ; $i++) { 
           

            echo "<br>". $claves[$i] . " => " . $mesesAsociativo[$claves[$i]];
            echo "<br>";
        }

   



    ?>


</body>

</html>