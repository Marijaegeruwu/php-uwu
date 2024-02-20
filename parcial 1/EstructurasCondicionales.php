<html>
    <head></head>
    <body>
        <h1>5630. Colegiatura</h2>
        <h2>Descripcion</h2>
        <p> La mamá de Esteban quiere inscribirlo en la mejor preparatoria de Cuernavaca, 
            pero le preocupa cuanto vaya a pagar, y te pide ayuda para que hagas un programa
            que le diga cuanto tenga que pagar.
            El esquema que se maneja es este: <br></p>
            <p>-La colegiatura de los alumnos se determina según el numero de materias que cursan.
            El costo de cada una de las materias es de $1600.<br></p>
            <p>-si el promedio obtenido por un alumno en el ultimo periodo es mayor o igual que 9,
                se le hará un descuento del 30% sobre la colegiatura y no se le cobrara IVA;
                si el promedio obtenido es menor que 9 deberá pagar la colegiatura completa, mas el IVA del 16%.<br>

            </p>
            <h2>Entrada</h2>
            <p>El numero de materias A que Esteban va a cursar. Y un numero con decimales B que es el promedio de Esteban.<br></p>
            <h2>Salida</h2>
            <p>Un numero C con el precio a pagar. Debe ir con un $.</p>

            <h2>Ejemplo</h2>
           <table border="1">
            <tr>
                <td>5 <br> 9.6</td>
                <td>$5600</td>
            </tr>
        
           </table>

        <?php
        $mat=5;
        $b=9.8;
        $c=0;
       if($b>=9)
       {    
            $c=$mat*1600;
            $desc=$c*0.30;
            $c=$c-$desc;

            echo "El costo es: ",$c;
       }
       else
       {
            $c=$mat*1600;
            $iva=$c*0.16;
            $c=$c+$iva;
            echo "El costo es: ",$c;

       }

       
        ?>

    </body>
</html>