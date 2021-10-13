<!DOCTYPE html>
<html>
    <meta charset="UTF-8">

<body>

<form>

<input type="text" name="archivo"></input> <br>
<input type="submit" name="buscar"></input> <br>

</form>

    <?php


    

        $nombreArchivo="archivo";

        try{
        if (file_exists($nombreArchivo)) {
            echo "El archivo $nombreArchivo existe.";
        } else {
            throw new Exception("El archivo $nombreArchivo no existe.", 1);
        }
    }

    catch(Exception $e){
        echo $e->getMessage();
    }

        
       
        


    
    

        
   
    
   


   



    ?>


</body>

</html>