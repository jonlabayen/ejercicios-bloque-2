<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

    <?php
    


    function potencia($potencia,$exponente){
        
        if($potencia==NULL){
            $potencia=2;
        }

        $cont = 1;
        $resultado = 1;
        


            while($cont<=$potencia) {
                $cont++; 
                $resultado= $resultado*$exponente;
                

            }
            echo $resultado;

    }

    potencia(5,2);

        