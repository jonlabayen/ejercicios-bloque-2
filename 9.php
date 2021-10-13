<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

    <?php


    function Area($lado){
        if($lado<0){
            throw new Exception("El numero es negativo");
        }
        if($lado==0){
            throw new Exception("El numero es 0");

        }
        $cuadrado=$lado * $lado;
        echo $cuadrado ."<br>";
    }
    
    $array;
    echo "<br>";
    for ($i=0; $i <=4 ; $i++) { 
        
        $numero=random_int(-1000,1000);
        
        $numero=intval($numero);        
        $array[$i]=$numero;
    }
    echo "<br>";
    echo sizeof($array);
    echo "<br>";
    
    for ($i=0; $i < sizeof($array) ; $i++) { 
        
        Area($array[$i]);
    }
