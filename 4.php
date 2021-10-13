<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

    <?php

        //quitar las tildes porque si no lo cuenta como un caracter

        $str = "manzana pera limon sandia melon";
        $frutas= explode(" ", $str);
        //echo "$frutas[0]<br>";
        //solo con count porque ya es un array
        $length=count($frutas);
        
        // echo gettype($length); (integer)
        
        //echo $length;
        $frutasAsociativo=array();

        for ($i=0; $i < $length ; $i++) { 

            $frutasAsociativo[$frutas[$i]]=strlen($frutas[$i]);
        }
       
        

        $clave=array_keys($frutasAsociativo);
        for ($i=0; $i < $length ; $i++) { 

            echo "<br>". $clave[$i] . " => " . $frutasAsociativo[$clave[$i]];
        }



   



    ?>


</body>

</html>