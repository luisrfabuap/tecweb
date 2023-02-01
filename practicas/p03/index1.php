<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"&gt;
<html>
<head>
    <title>Práctica 2</title>
</head>
<body>
    <h2>Inciso 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar, $_7var, myvar, $myvar, $var7, $_element1, $house*5</p>
    <?php
        $_myvar = 'hola';
        echo '$_myvar es correcta <br>';

        $_7var = 11;
        echo '$_7var es correcta <br>' ;

        //myvar = 3.141516;
        echo 'myvar es incorrecta <br>';

        $myvar = "Hola";
        echo '$myvar es correcta <br>';

        $var7 = "Hola 2";
        echo '$var7 es correcta <br>';

        $_element1 = "Hola 3";
        echo '$_element1 es correcta <br>';

        //$house*5 = "Error";
        echo '$house*5 no es correcta, esto se debe a que no se puede utilizar un signo dentro de una variable';

    ?>

       <h2>Inciso 2</h2>
       <p>Proporcionar los valores de $a, $b, $c como sigue:</p>

       <?php
       $a = "ManejadorSQL";
       $b = 'MySQL';
       $c = &$a;


       echo $a;
       echo '<br>' ;
       echo $b; 
       echo '<br>' ;
       echo $c;
       echo '<br>';

       
       $a = "PHP server";
       $b = &$a;
       echo '<br> CAMBIO DE CONTENIDO DE LAS VARIABLES $a & $b ';
       echo '<br><br>';
       echo $a;
       echo '<br>' ;
       echo $b; 
       ?>


        <H2>Inciso 3</H2>
        <p>Muestra el contenido de cada variable inmediatamente después de cada asignación,
        verificar la evolución del tipo de estas variables (imprime todos los componentes de los
        arreglo):</p>
       <?php

        echo '1) ';
        $a = "PHP5 <br>";
        echo $a;

        echo '2) ';
        $z = array();
        $z [] = &$a;
        echo $z [0]; //'Es un arreglo'
        

        echo '3) ';
        $b = "5a version de PHP";
        echo $b;
        echo '<br>';

        echo '4) ';
        $c = $b*10;
        echo $c;
        echo '<br>';

        echo '5) ';
        $a .= $b;
        echo $a; 
        echo '<br>';

        echo '6) ';
        $b *= $c;
        echo $b;
        echo '<br>';

        echo '7) ';
        $z[0] = "MySQL";
        echo $z [0];
        ?>
</body>
</html>