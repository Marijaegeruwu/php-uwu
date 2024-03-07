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
    <h1>Tarea 1.7<span> Resolviendo problemas de OmegaUp</span></h1>
    
    <body>
    <h1>Escalera de asteriscos</h1>
    <table border=1>
    <tr>
        <td>Points</td>
        <td>9.01</td>
        <td>Memory limit</td>
        <td>32 MiB</td>
    </tr>
    <tr>
        <td>Time limit(case)</td>
        <td>1s</td>
        <td>Time limit(total)</td>
        <td>1m0s</td>
    </tr>
    <tr>
        <td>Input size limit (bytes)</td>
        <td>10KiB</td>
    </tr>
    </table>

        <h2>Descripcion</h2>
        <p>u misión es ayudar a Inés a subir a su casa construyendo una escalera
             de longitud y altura hecha de asteriscos.</p>
        <h2>Entrada</h2>
        <p>Un numero entero N el cual representa el numero de la escalera</p>
        <h2>Salida</h2>
        <p>Deberas imprimir como salida una escalera de dimensiones de N de largo y N de alto</p>
        <h2>Ejemplo</h2>
        <table border=1>
            <tr>
                <td>2</td>
                <td>#<br>##</td>
            </tr>
            <tr>
                <td>5</td>
                <td>#<br>##<br>###<br>####<br>#####</td>
            </tr>
            <tr>
                <td>1</td>
                <td>#</td>
            </tr>
            <tr>
                <td>3</td>
                <td>#<br>##<br>###</td>
            </tr>
        </table>

        <form action="problema1.php" method="post">
    Num 1:
        <input type="text" name="uno"><br>
        <input type="submit" value="Enviar"><br>|
        </form>
        
        <?php
    echo "<br>";
        if($_POST)
        {
            $n=$_POST['uno'];
            
            echo "Numero de escalones: ". $n ."<br>";

            for ($i = 1; $i <= $n; $i++) 
            {
                for ($j = 1; $j <= $i; $j++) 
                {
                     echo "#";
                }
                echo "<br>";
            }

          


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