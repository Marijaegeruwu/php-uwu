<html>
<head></head>
<body>
<h1>12618. Practicando con formulas</h1>

<table >
    <tr>
        <td>Points</td>
        <td>10.76</td>
        <td>Memory limit</td>
        <td>32 MiB</td>
    </tr>
    <tr>
        <td>Time Limit (case)</td>
        <td>1s</td>
        <td>Time limit (total)</td>
        <td>1m0s</td>
    </tr>
    <tr>
        <td>Input size limit (bytes)</td>
        <td>10Kib</td>
    </tr>

</table>
<h2>Descripción</h2>
Dado un valor real  a, quieres resolver una serie de ecuaciones
 hasta obtener el valor de z.
.

<h2>Entrada</h2>
Un real a. Puedes suponer que 1 < a < 100.

<h2>Salida</h2>
un real que sea valor z impreso con 3 puntos decimales.

<h2>Ejemplo</h2>

<?php
# CODIGO PHP 
$a=33.562;

# OPERACION
echo "Variable a : ", $a, "<br>";
$x;
$y;
$z;

/*$x=3$a*$a*$a+15;
$y=$x+3/$x+1;
$z=5$x + 7$y/$a $x $y;*/
$x = 3*$a+15;
$y= $x+3/$x+1;
$z=5*$x+7*$y/$a*$x*$y;

echo "Resultado: ", $z;

?>


</body>
</html>
