<?php
    //Funcion de saludo con fecha
    function saludar(){
        echo "<h2>"."Buenos dias. La fecha de hoy es: ";
        echo date('Y-m-d')."</h2>";
    }

    echo "<h1>"."Funciones en PHP"."</h1><br>";

    //Funcion de saludo con nombre
    function saludo($nombre,$apellido){
        echo "<h2>"."Buenas tardes. ".$nombre." ".$apellido."</h2>";
    }

    //Funcion para operacion de multiplicacion
    function multiplicar($a,$b,$c){
        echo "<h2>"."El resultado es: ".$a*$b*$c."</h2>";
    }

    //Funcion para calcular el area de un circulo
    function areaCirculo($radio){
        echo "El area del circulo es: ".pi()*pow($radio,2);
    }

    //Fucion para calcular el area de un cuadrado
    function areaCuadrado($lado){
        return pow($lado,2);
    }

    echo saludar();
    echo saludo("Estiven","Valarezo");
    echo saludo("Josua","Villa");
    echo multiplicar(2,3,4);
    $r = 5;
    echo areaCirculo($r);
    $l = 4;
    echo areaCuadrado($l);
?>