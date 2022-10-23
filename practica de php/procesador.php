<?php

    if( isset($_GET["submit"]) && !empty($_GET["submit"]) ){

        $nom = $_GET['nombre'];
        $n1 = $_GET['nota1'];
        $n2 = $_GET['nota2'];
        $n3 = $_GET['nota3'];
        
        $n4 = $_GET['nota4'];
        $n5 = $_GET['nota5'];
        $n6 = $_GET['nota6'];
    
        $n7 = $_GET['nota7'];
        $n8 = $_GET['nota8'];
        $n9 = $_GET['nota9'];
        $carrera = $_GET['carrera'];

        $nota_final = ($n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8+$n9)/9;
        
        if(empty($nom)){
            echo "Agrega tu nombre<br>";
        }else if(strlen($nom)>15){
            echo "Nombre probablemente INVALIDO<br>";
        }else if (is_numeric($nom)){
            echo "ERROR se detecto un numero en tu nombre<br>";


        }if ($nota_final > 3.9){
                echo "!Aprobo!";
            }else{
                echo "Reprobo";
        }
        echo "<br>el nombre del estudiante es: " .$nom. "<br />";

        echo "<br>Tu carrera es: " .$carrera. "<br />";

        echo "<br>Tu nota1 de la unidad es: " .$n1. "<br />";

        echo "<br>Tu nota2 de la unidad es: " .$n2. "<br />";

        echo "<br>Tu nota3 de la unidad es: " .$n3. "<br />";

        echo "<br>Tu nota4 de la unidad es: " .$n4. "<br />";

        echo "<br>Tu nota5 de la unidad es: " .$n5. "<br />";

        echo "<br>Tu nota6 de la unidad es: " .$n6. "<br />";

        echo "<br>Tu nota7 de la unidad es: " .$n7. "<br />";

        echo "<br>Tu nota8 de la unidad es: " .$n8. "<br />";

        echo "<br>Tu nota9 de la unidad es: " .$n9. "<br />";

        echo "<br>el promedio es: " .$nota_final. "<br />";


        echo "<br>Tu carrera es: " .$carrera. "<br />";

        
    }
?>