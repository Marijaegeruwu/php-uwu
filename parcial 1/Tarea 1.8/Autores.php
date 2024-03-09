<!DOCTYPE html>
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
                    <li><a href="Asquisicion.php">Adquisicion de Numeros</a></li>
                    <li><a href="Autores.php">Autores</a></li>
                    <li><a href="Bitdeparidad.php">Bits de paridad</a></li>
                    </ul>
            </nav>
        </div>
        <section class="gallery">
            <img src="Imagenes/uwu-removebg-preview.png" alt="uwu-removebg-preview">
        </section>
        </div>
<h1>Autores</h1>
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
<!--eso q-->


<h2>Descripcion</h2>
<p>Consta de varias palabras separadas por un "-" por ejemplo
    "Anita-lava-la-tina" entonces debera imprimir la primer letra de tods las palabras despues del "-" la cual seria"Allt"
</p>

<h2>Entrada</h2>
<p>varias palabras separadas por "-"</p>

<h2>Salida</h2>
<p>Lo unico que se imprimira son las iniciales de cada palabra</p>
<h2>Ejemplo</h2>

<table border=1>
    <tr>
        <td>Knuth-Morris-Pratt</td>
        <td>KMP</td>
    </tr>
    <tr>
        <td>Mirko-Slavko</td>
        <td>MS</td>
    </tr>
    <tr>
        <td>Pasko-Patak</td>
        <td>PP</td>
    </tr>
</table>
<form action="Autores.php" method="post">
    Num 1:
        <input type="text" name="txtpalabra"><br>
        <input type="submit" value="Enviar"><br>
</form>

<?php

if($_POST)
{
    $nombre=$_POST['txtpalabra'];
   $p=strlen($nombre);
   echo "La frase es: ",$nombre;
   echo "<br>";
   echo $nombre[0];
   for ($i=0; $i <$p ; $i++) 
   { 
       
       if($nombre[$i]== "-")
       {
           echo $nombre[$i+1];
       }

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