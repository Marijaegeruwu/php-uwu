<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1 style="text-align: center";>2765. Sumando dos conjuntos</h1>
<p></p>
<table border="1">
        <tr>
            <td>Puntos</td>
            <td>9.96</td>
            <td>Limite de memoria</td>
            <td>32 MiB</td>
        </tr>
        <tr>
            <td>Limite de tiempo(caso)</td>
            <td>1s</td>
            <td>Limite de tiempo(total)</td>
            <td>1m0s</td>
        </tr>
        <tr>
            <td>Tamaño limite de entrada(bytes)</td>
            <td>10 KiB</td>
            
        </tr>
 </table>

       <h3>Descripcion</h3> 
       <p>Dados dos conjuntos de enteros de tamaño N, imprimir el resultado de sumarlos. 1<=N<=100. Por ejemplo, sea N=4:

2 3 4 5

6 7 1 3

El resultado de sumarlos es:

8 10 5 8</p>
       <h3>Descripcion</h3> 
       <p>En la primera línea el entero N. En la segunda línea,
         separados por un espacio, los números del primer conjunto.
         En la tercera línea también separados por un espacio, los números del segundo conjunto.</p>
        <h3>Salida</h3>
        <p>Los números resultantes de sumar ambos conjuntos, separados por un espacio.</p>

<?php
   
   $x=array();
     $y=rand(1,100);
     echo "Numeros a salir: ". $y . "<br>";
     for ($i=1; $i<=$y ; $i++)/*Ciclo para leer el arreglo UWU */
     {
         array_push($x, rand(0,10));
     }
     $arr=0;
     for($i=0; $i<$y; $i++)
        {
             $arr=$arr+$x[$i];
        }
        
        echo "<br>";
        echo "Arreglo 1: ";
     /*Imprimir la tabla */
     
     for($i=0; $i<$y; $i++)
        {
             
         
            echo  $x[$i], " ";
         
        }
        /******************************************************************** */
     
        echo "<br>";
        $xx=array();
     echo "<br>";
     for ($i=1; $i<=$y ; $i++)/*Ciclo para leer el arreglo UWU */
     {
         array_push($xx, rand(0,10));
     }
     $arre=0;
     for($i=0; $i<$y; $i++)
        {
             $arre=$arre+$xx[$i];
        }
        
        echo "<br>";
        echo "Arreglo 2: ";
     /*Imprimir la tabla */
     
     for($i=0; $i<$y; $i++)
        {
             
         
            echo  $xx[$i], " ";
         
        }

        echo "<br>";
        
        echo "<br>";

        echo "Suma de los 2 arreglos: ";

        for($i=0; $i<$y; $i++)
        {
             
         
            echo $x[$i] + $xx[$i], " ";
         
        }



     


  
    
?>
  
</body>
</html>