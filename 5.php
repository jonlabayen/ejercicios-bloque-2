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
           
            if($i-1<=6 && ($i-1)%2==1){
                $mesesAsociativo[$meses[$i]]=31;

            }
            if($i-1<=6 && ($i-1)%2==0){
                $mesesAsociativo[$meses[$i]]=30;

            }

            
            if($i-1>=7 && ($i-1)%2==1){
                $mesesAsociativo[$meses[$i]]=30;

                 }
            if($i-1>=7 && ($i-1)%2==0){
                $mesesAsociativo[$meses[$i]]=31;
    
                }
            if($i==0 ){
                $mesesAsociativo[$meses[$i]]=31;
                 }
             if($i==1){
                $mesesAsociativo[$meses[$i]]=28;
            }
            
        }



        $llave=array_keys($mesesAsociativo);
        for ($i=0; $i < $length ; $i++) { 

            echo "<br>". $llave[$i] . " => " . $mesesAsociativo[$llave[$i]];
        }







    ?>


</body>