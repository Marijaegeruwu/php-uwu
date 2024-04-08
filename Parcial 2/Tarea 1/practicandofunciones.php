<html>
    <head></head>
    <body>
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="customer-support">
                    <div class="Content-customer-support">
                    </div>
                </div>
                <div class="container-logo">
                </div>
                <div class="container-user">
                </div>
            </div>
        </div>
        <div class="container-navbar">
            <h1>Practicando funciones</h1>
            <li><a href="indextareas.html"> Inicio</a></li>
        </div>
    </header>

    <main>
        <center>
            <table>
                <tr>
                    <td>Puntos</td>
                    <td>23.98</td>
                    <td>Límite de memoria</td>
                    <td>32 MiB</td>
                </tr>
                <tr>
                    <td>Límite de tiempo</td>
                    <td>1s</td>
                    <td>10 KiB</td>
                    <td>1m0s</td>
                </tr>
                <tr>
                    <td>Tamaño límite de entrada</td>
                </tr>
            </table>
        </center>

        <h2>Descripción</h2>
        <p>
            Dados tres numeros x,y,z, calcula el valor de h(x,y,z), si las funciones f,g,h estan definidas. Usa enteros para realizar los cálculos, y 
 es la operación residuo de la división (también llamada módulo). Los resultados de las operaciones deben coincidir con aquellos del lenguaje C.
        <h2>Entrada</h2>
        <p>
            Tres numeros enteros x,y,z separados por un espacio. Puedes suponer que 1 < x,y,z < 100 y que no se produciran diviciones entre cero
        </p>

        <h2>Salida</h2>
        <p>
            El entero obtenido a evaluar h(x,y,z)
        </p>

        <center>
            <h2 class="form-title">Ejemplo</h2>
        </center>

        <table class="example-table">
            <tr>
                <th>Entrada</th>
                <th>Salida</th>
            </tr>
            <tr>
                <td>-10 -4 18</td>
                <td>-36</td>
            </tr>
        </table>

        <div align="center">
            <form action=" practicandofunciones.php" method="post">
            <table>
                <tr>
                     <td>Entrada</td>
                     <td><input type="text" name="txtn1"></td>
                     <td><input type="text" name="txtn2"></td>
                     <td><input type="text" name="txtn3"></td>
                </tr>
            <tr>
                <td> </td>
                <td><input type="submit" name="Enviar"></td>
            </tr>
        </table>

        <?php
if($_POST)
{
    $x=$_POST["txtn1"];
    $y=$_POST["txtn2"];
    $z=$_POST["txtn3"];
    


    function f ($a, $b)
    {
       $f=(4*pow((int)$a,3))+g(2*(int)$a,-3*(int)$a);
        return $f;
    }
    
    function g ($a, $b)
    {
        $g=(7*(int)$b-3)%($a*$a+1);
        return $g;
    }

    function h ($x,$y,$z)
    {
        $h= ($x/$y)+3*g($z/$y,$x);
        return $h;
    }

    $hola= h($x,$y,$z);

    echo " <table>";
    echo "<tr>";
    echo "<td> La salida es:  </td> ";
    echo "<td>";
    echo $hola;
    echo "</td>";
    echo "</tr>";
    echo "";
    echo "</table>";
}

?>
        </div>


    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: url('imagenes/uwu.jpg') no-repeat;
            background-position: center;
            background-size: cover;
            display: flex;
            min-height: 100vh;
            flex-direction: column; 
            color: #fff; 
        }

        .container-hero {
            background-color: #861DA0;
            text-align: center;
        }

        .container-navbar {
            background: linear-gradient(to bottom, #2E0438, #000);
            text-align: center;
            
        }

        h1 
        {
            font-family: 'Didot', serif;
            background-color: #fff;
            -webkit-background-clip: text;
            color: transparent;
            display: inline-block;
        }

        h2,
        p {
            width: 80%;
            margin: 0 auto; 
            padding: 10px;
            border-bottom: 1px solid #ccc; 
        }

        .form-title {
            border-bottom: none; 
        }

        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }

        table, th, td 
        {
            border: 1px solid #333;
            border-collapse: collapse;
            background-color: #2E0438;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        table.example-table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
            background-color: #1c1a1a; 
        }

        table.example-table th, table.example-table td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
            background-color: #2E0438;
        }
        .form-container 
        {
            text-align: center;
            margin: 0 auto;
        }
    </style>    

    </body>
</html>
