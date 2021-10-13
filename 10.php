<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

    <?php
        class Persona {
            
                function __construct ($nombre,$apellido,$dni) {
                 $this->nombre=$nombre;
                 $this->dni=$dni;
                 $this->apellido=$apellido;

             }
             
             public function MostrarPersona() {
                echo "Persona: ". $this->nombre ." " . $this->apellido . " " . $this->dni . "<br>";
            }
            
            }
            
            
            $persona= new Persona("Jon", "Labayen", "72601596A");
            $persona -> MostrarPersona();

             
             
             
             
             
             
             
             
             
             class Usuario extends Persona{
                function __construct ($nombre,$apellido,$dni,$puntos){
                    parent::__construct($nombre,$apellido,$dni);
                    $this->puntos=$puntos;
                }

               
               
               
                public function MostrarUsuario(){
                    echo "Usuario: ". $this->nombre ." " . $this->apellido . " " . $this->dni ." " . $this->puntos;
                }
                
                
                
                
                
                public function puntos(){
                    if ($this->puntos < 100) {
                        echo "Tienes menos de 100 puntos.";
                    }else{
                        echo "Tienes mas de 100 puntos.";

                    }
                }
                




             }
             $usuario= new Usuario("Jon", "Labayen", "72601596A", 133);
             $usuario -> MostrarUsuario();
             echo "<br>";
             $usuario -> puntos();
             
            
    ?>


</body>