
<html>
<body>

<h2>Estructura de control (IF)</h2>
<?php
/*$a=35;
$b=30;

if($a>=$b)
{
    echo"El mayor es: ", $a,"<br>";
}
else
{
    echo"El mayor es: ", $b,"<br>";
}*/

$estacion="invierno";

if($estacion="invierno")
{
    echo"Invierno, del 21 de diciembre al 20 de Marzo.";
}
else if($estacion="primavera")
{
    echo"Primavera, del 21 de Marzo al 20 de Junio.";
}
else if($estacion="Verano")
{
    echo "Verano, del 21 de Junio al 20 de Septiembre.";
}
else if($estacion="Otoño")
{
    echo"Otoño, del 21 de Septiembre al 20 de Diciembre.";
}
?>


</body>
</html>