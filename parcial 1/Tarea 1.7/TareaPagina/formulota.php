<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
            <nav class="navbar container">
                <h1><span>Lista de problemas</span></h1>
                <ul>
                <li><a href="index.html">Inicio</a></li>
                    <li><a href="problema1.php">Escalera de Asteriscos</a></li>
                    <li><a href="formulota.php">Formulota</a></li>
                    <li><a href="calculoscond.php">Calculos Condicionales</a></li>
                    <li><a href="cuadrilatero.php">El Lado Más Corto</a></li>
                    
                </ul>
            </nav>
        </div>
        <section class="gallery">
                <img src="Imagenes/uwu-removebg-preview.png" alt="uwu-removebg-preview">
            </section>
            </div>
            <section class="gallery">
                <img src="Imagenes/uwu-removebg-preview.png" alt="uwu-removebg-preview">
            </section>
            </div>
           
</header>

<h1>Formulota</h1>

      <table border=1 >
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

    <h2>Descripcion</h2>

    <h2>Entrada</h2>
    <p>Diseñar un programa que pregunte los valores de las variables x,y,z y evalue la función f(x,y,z).</p>
    <h2>Salida</h2>
    La respuesta, o salida a la consola, será el valor de la función f(x,y,z) redondeado a 6 decimales.

    <h2>Ejemplos</h2>

    <table border=1>
        <tr>
            <td>1<br>2<br>3<br></td>
            <td>0.235714</td>
            <td>0.235714285714286</td>
        </tr>
        <tr>
            <td>4<br>5<br>6<br></td>
            <td>0.074477</td>
            <td>0.0744773519163764</td>
        </tr>
        <tr>
            <td>7<br>8<br>9<br></td>
            <td>0.044525</td>
            <td>0.0445247435713634</td>
        </tr>

    </table>

</table>
        <form action="formulota.php" method="post">
    Num 1:
        <input type="text" name="num"><br>
    Num 2:
        <input type="text" name="numdoh"><br>
    Num 3:
        <input type="text" name="numtre"><br>
        <input type="submit" value="Enviar"><br>
        </form>
    <?php
    echo "<br>";
        if($_POST)
        {
            $x=$_POST['num'];
            $y=$_POST['numdoh'];
            $z=$_POST['numtre'];
            echo "Num 1: ". $x ."<br>";
            echo "Num 2: ". $y ."<br>";
            echo "Num 3: ". $z ."<br>";
            
            $f=((($x + $y) / (2 * $x)) + (($x * $x * $x + $y * $y * $y) / ($x * $x + $y * $y))) / ($x * $x + $y * $y + $z * $z);

            echo "Resultado de la formulota : ". $f;


        }

    ?>

<style>
         body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000;
            display: flex;
            min-height: 100vh;
            flex-direction: column; 
            color: #fff;
        }

        .container-hero {
            background: #000;
            text-align: center;
        }

        .container-navbar {
            background: linear-gradient(to right, #000, rgb(49, 218, 6) );
            text-align: center;
        }

        h1
        {

            background:rgb(49, 218, 6); ;
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
           
            width: 60%;
            margin: 10px auto;
        }

        table, th, td 
        {
            border: 1px solid #fff;
            border-collapse: collapse;
            background-color: #072002;
        }

        .gallery
         {
            gap: 1.5rem;
            margin-bottom: 3rem;
            margin-right: 970px;
            margin-top: -270px;

         }

     

      
        
    </style>
    
</body>
</html>