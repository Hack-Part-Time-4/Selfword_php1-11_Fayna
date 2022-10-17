<?php

// ejercicio 1 selfwork back-end.- crear programa de operaciones:
//suma
$nvar = 10;
$nlet = 5;
$nSuma = $nvar + $nlet;
echo "la suma de 10 y 5 es : $nSuma.\n";

//resta
$number1= 12;
$number2= 10;
$number= $number1 - $number2;
echo "la resta de 12 y 10 es:$number.\n";

 //multiplicar
 $numero1=6;
 $numero2=2;
$nMultiplicar = $numero1 * $numero2;
echo " la multiplicacion de 6 y 2: $nMultiplicar.\n";


//ejercicio 2 crear un array e imprimir un elemento del array
$numero=[2,34,67,89,0,89,67,5];
    echo $numero[6]."\n";


//ejercicio 3 crear array
$movil = [["modelo" => "Iphone", "color"=> "grenn"],
         ["modelo"=>"Oppo", "color"=> "blue"],
         ["modelo"=> "Samsung","color"=>"black"]];
        echo $movil[2]["color"]."\n"; 
        

//ejercicio 4 programa que imprima los primeros 10 numeros
   for ($i=0; $i < 10; $i++) { 
        echo"$i\n";
    }


    //ejercicio 5 crear programa que sume los primeros 10 numeros
    $sRan= 0;
    for ($i=0; $i <=10 ; $i++) { 
        $sRan = $sRan + $i;
        
    }
        echo $sRan."\n";

    //ejercicio 6 crear programa que imprima X numeros random
    
    for ($i=0; $i <=30  ; $i++) { 
        $nRand= rand(1,30);
        echo $nRand." ";
    }

    //ejercicio 7 funcion encapsulando los dos ejercicios anteriores
    //primero; sumar los 10 primeros numeros
    function sumar10PrimerosNumeros(){
        $suma = 0;
        for ($i = 0; $i <= 10; $i++){
            $suma = $suma + $i;
        }
        return $suma;
    }

    //segundo:sumar numeros random
    function generarRandom($x){
        for ($i = 0; $i < $x; $i++){
            $rand = rand(0, $x);
            echo $rand." ";
        }
    }

    
    //ejercicio 8 programa que imprima valores X random en el intervalo de 0-X
    $x=40;
    for ($i=0; $i <= $x; $i++) { 
        $random=rand(0,$x);
        echo $random."\n";
    }


    //ejercicio 9 programa que imprima solo valores pares
    $numero=30;
    for ($i=0; $i < $numero ; $i++) { 
        if ($i % 2 == 0) {
            echo $i."\n";
        }
    }


    //ejercicio 10 programa que imprima solo valores impares
    $numero1=20;
    for ($i=0; $i < $numero1; $i++) { 
        if ($i % 2 ==1) {   //tambien podriamos poner ($i % 2 !=0)
            echo $i."\n";
        }
    }

    //ejercicio 11...imprimir programa que n dado n y otro boleam:true-par false-impar
    $pares=true; //aqui cambiando y ponemos FALSE  y nos imprimiria los numeros impar.
    $numero=10;
    if ($pares==true) {
        for ($i=0; $i <= 10; $i++) { 
            if ($i % 2==0) {
                echo $i."\n";
            }
        }
    }
