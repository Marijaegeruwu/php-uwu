<html>
    <body>
        <h1>7341. El mayor de tres números</h1>
        <table border=1>
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
        <h2>Descripción</h2>
        <p>Realiza un problema que imprima el mayor de tres números</p>
        <h2>Entrada</h2>
        <p>Escribe 3 numeros a, b y c</p>

        <h2>Ejemplo</h2>
        <table border=1>
        <tr>
            <td>10, 8, -7 </td>
            <td>10</td>
        </tr>
        <tr>
            <td>10, 81, 101</td>
            <td>101</td>
        </tr>
        </table>

        <h2>Salida</h2>

        <?php
        $a=10;
        $b=81;
        $c=1;
        echo "Variables: ", $a,", ", $b,", ", $c,"<br>";
        echo "resultado: ";
        if($a > $b and $c)
        {
            echo $a;
        }
        elseif( $b > $a and $c)
        {
            echo $b;
        }
        elseif($c> $b and $a)
        {
            echo $c;
        }
        ?>


    </body>
</html>