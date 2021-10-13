<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <style>
        td{
            border: solid black 1px;
        }
        tr{
            border: solid black 1px;
        }
        table{
            border: solid black 1px;
        }
    </style>
    <body>

        <?php

        $linea=4;
        $columna=5;
        $x=1;
        $y=1;
        echo "<table>";

        while($x<=$linea){
            
            if($y==1){
                echo " <tr>";
            }

            echo"
            <td> $y . $x </td>
            ";
            $y++;
            if($y==$columna+1){
                $y=1;
                $x++;
                echo "</tr>";
                
            }

          



        }
        echo "</table>";
   


