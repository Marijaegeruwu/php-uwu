<html>
<body>
    <h1>13433. Estaciones del Año</h1>

    <table border="1">
        <tr>
            <td>Puntos</td>
            <td>23.98</td>
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
    <h1>Descripcion</h1>
    <p>Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control selectivas en la programación estructurada, como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación 
        (su nombre en inglés) del año pertenece una fecha en especifico compuesta por un día 
 y un mes 
 según lo siguiente:<br></p>
 <p>
 -Winter del 21 de diciembre al 20 de marzo<br>
-Spring del 21 de marzo al 21 de junio<br>
-Summer del 22 de junio al 22 de septiembre<br>
-Fall del 23 de septiembre al 20 de diciembre<br>
 </p>
 <p>-Winter del 21 de diciembre al 20 de marzo<br>
-Spring del 21 de marzo al 21 de junio<br>
-Summer del 22 de junio al 22 de septiembre<br>
-Fall del 23 de septiembre al 20 de diciembre<br>
Ayuda a Brithany a crear ese programa usando estructuras de control selectivas.<br></p>

<h1>Ejemplo</h1>
<h2>Entrada       Salida</h2>

<table border="1">
    <tr>
        <td>15-10</td>
        <td>no existe</td>
    </tr>
    <tr>
        <td>22-3</td>
        <td>primavera</td>
    </tr>
    <tr>
        <td>31-4</td>
        <td>no existe</td>
    </tr>
</table>
<p><br></p>
<?php

$mes="Septiembre";
$dia=31;
 echo "Resultado: ";
if($mes="enero" and $dia>=1 and $dia<=31)//enero
{
    echo"Invierno";
}
else if($mes="febrero" and $dia>=1 and $dia<=28)//febrero
{
    echo"Invierno";
}
else if($mes="marzo" and $dia>=1 and $dia<=20)//marzo
{
    echo"Invierno";
}
else if($mes="marzo" and $dia>=21 and $dia<=31 )//marzo 2
{
    echo"Primavera";
}
else if($mes="abril" and $dia>=1 and $dia<=30 )//abril
{
    echo"Primavera";
}
else if($mes="mayo" and $dia>=1 and $dia<=31 )//Mayo
{
    echo"Primavera";
}
else if($mes="junio" and $dia>=1 and $dia<=21 )//junio
{
    echo"Primavera";
}
else if($mes="junio" and $dia>=22 and $dia<=30 )//junio2
{
    echo"Primavera";
}
else if($mes="julio" and $dia>=1 and $dia<=31 )//julio
{
    echo"Verano";
}
else if($mes="agosto" and $dia>=1 and $dia<=31 )//agosto
{
    echo"Verano";
}
else if($mes="septiembre" and $dia>=1 and $dia<=22 )//septiembre
{
    echo"Verano";
}
else if($mes="septiembre" and $dia>=23 and $dia<=30 )//septiembre 2
{
    echo"Otoño";
}
else if($mes="octubre" and $dia>=1 and $dia<=31 )//octubre
{
    echo"Otoño";
}
else if($mes="noviembre" and $dia>=1 and $dia<=30 )//noviembre
{
    echo"Otoño";
}
else if($mes="diciembre" and $dia>=1 and $dia<=20 )//diciembre
{
    echo"Otoño";
}
else if($mes="diciembre" and $dia>=21 and $dia<=31 )//diciembre
{
    echo"Invierno";
}
else
{
    echo"no existe";
}

//echo"pq no jala ToT";

?>

</body>
</html>