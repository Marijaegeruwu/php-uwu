<html>
    <body>
        <h1>Cuantos valen 7</h1>
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

        <h1>Ejemplo</h1>

<h2>Entrada       Salida</h2>

<table border="1">
    <tr>
        <td>7  7</td>
        <td>2</td>
    </tr>
    <tr>
        <td>7 57</td>
        <td>1</td>
    </tr>
    <tr>
        <td>62 7</td>
        <td>1</td>
    </tr>
</table>
    </table>

   Resultado: 
    <?php
 
    $a=7;
    $b=57;
    $c=0;
    if($a==7 and $b==7)
    {
        $c=$c+2;
        echo $c;
    }
    else if($a==7 and $b<7 and $b>7)
    {
        $c=$c+1;
        echo $c;
    }
    else if($b==7 and $a<7 and $a>7)
    {
        $c=$c+1;
        echo $c;
    }
    else{
        echo"0";
    }

    ?>
<!--No jalan todos los casos-->

    </body>
</html>