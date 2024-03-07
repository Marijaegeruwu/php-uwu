
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
</header>

    <h1>Calculos condicionales</h1>
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
<p>Eres muy bueno evaluando fórmulas y realizando cálculos directos, pero te cuesta trabajo decidir en qué situaciones se deben hacer qué operaciones. Un compañero te sugirió un ejercicio de cálculo mental que consiste en, dado un número inicial 
N, realizar las siguientes operaciones en el orden indicado y con aritmética entera:<br>

1.Si el valor actual de N
 es par, divídelo entre 2. En caso contrario, súmale 1.<br>
2.Si el valor actual de N
 tiene tres o más cifras, divídelo entre 100. Pero si tiene exactamente dos cifras, divídelo entre 10.<br>
3.Si el valor actual de N
 es un múltiplo de tres, réstale uno.<br>
Escribe un programa que te ayude a calcular el valor final de 
 y el número de veces que 
 fue modificado.</p>
<h2>Entrada</h2>
<p>Un entero</p>
<h2>Salida</h2>
<p>Dos enteros, el numero original y las veces que este fue modificado</p>
<h2>Ejemplo</h2>
<table border=1>
    <tr>
        <td>7</td>
        <td>8,1</td>
    </tr>
</table>
        <form action="calculoscond.php" method="post">
    Num 1:
        <input type="text" name="uno"><br>
        <input type="submit" value="Enviar"><br>
        </form>
        <?php
    echo "<br>";
        if($_POST)
        {
            $n=$_POST['uno'];
            
            echo "Numero inicial: ". $n ."<br>";
            $contador=0;
            while($n != 1)
            {

          
            if( $n%2==0)
            {
                $n=$n/2;
                $contador=$contador+1;
            }
            else if ( $n%2== !0)
            {
                $n=$n+1;
                $contador=$contador+1;
            }

            else if($n >100)
            {
                $n=$n/3;
                $contador=$contador+1;
            }
            else if($n>9 and  $n< 100)
            {
                $n=$n-1;
                $contador=$contador+1;
            }
        }
            
            echo "Veces que el numero fue modidicado: ". $contador;

          


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
