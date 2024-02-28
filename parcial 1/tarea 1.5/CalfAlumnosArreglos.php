<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center"; >Ejercicio Arreglos con php.</h1>
    <h2 style="text-align: center";>Calificaciones alumnos del cbtis.</h2>
    <p></p>
    <?php
     $x=array();
     $y=rand(1,1000);
     for ($i=1; $i<=$y ; $i++)/*Ciclo para leer el arreglo UWU */
     {
         array_push($x, rand(0,10));
     }
     $arr=0;
     for($i=0; $i<$y; $i++)
     {
         $arr=$arr+$x[$i];
     }
     echo "Todas las calificaciones: ";
     /*Imprimir la tabla */
     echo "<table border='1';text-align: center;'>";
     for($i=0; $i<$y; $i++)
     {
         if($i%30==0)
         {
             echo "<tr>";
         }
         else
         {
             echo "<th  style='text-align: left; background-color: pink;'>". $x[$i]. "</th>";
         }
     }
     echo "</tr>";
     echo "</table>";
     echo"<br>";
     $a=0;
     $r=0;
     echo "Alumnos aprobados: ";
     $uwu=0;
     $unu=0;
     /*Calcular aprobados y reprobados */
     for ($i = 0; $i < $y; $i++) 
    {
         if ($x[$i] >= 6)
         {
            $uwu++;
            $a=$a+$uwu;
         }
         else
         {
            $unu++;
            $r=$r+$uwu;
         }

    }
        echo $uwu;
         echo "<br>";
         echo "Alumnos reprobados: ";
         echo $unu;
         echo "<br>";

     /*Calcular la desviacion estandar */
     /*nomesalio*/
    ?>


</body>
</html>
