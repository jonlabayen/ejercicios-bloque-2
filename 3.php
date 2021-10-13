<html>
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>
        <?php

class aleatorio{

   public $array=[];

    

    public function __construct (  ){
       
        
        
    }

    function rellenarArray () {
        for ($i=0; $i<20; $i++){
            $aleatorio = rand(1,100);
            $this->array[$i]=$aleatorio;
           rsort($this->array);

        }

        for ($j=0; $j<20; $j++){
             echo $this->array[$j]. " ";
        }
        
}

}

$aleatorio = new aleatorio();
$aleatorio -> rellenarArray();


        
        
        ?>
    </body>
</html>