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

        <h2>Inciso 4</h2>
        <p>Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de
        la matriz $GLOBALS o del modificador global de PHP.</p>

        <?php
        $a = "PHP5 <br>";
        

        echo '1) ';
        function test() {
            $a = "PHP5";
            echo '$a en el ámbito global: ' . $GLOBALS['a'] . "<br>";
            echo '$a en el ámbito actual: ' . $a . "<br>";
            }
            $a = "PHP5 2";
            test();
        echo '<br>';

        echo '2) ';
        function arreglo() {
            $z [] = &$a;
            echo '$z en el ámbito global: ' . $GLOBALS['z'] . "<br>";
            echo '$z en el ámbito actual: ' . $z . "<br>";
            }
            $z [0] = "MySQL";
            arreglo();
        echo '<br>';
        
        echo '3) ';
        function test1() {
            $b = "5a version de PHP";
            echo '$b en el ámbito global: ' . $GLOBALS['b'] . "<br>";
            echo '$b en el ámbito actual: ' . $b . "<br>";
            }
            $b = "5a version de PHP 1";
            test1();
            echo '<br>';
        
        echo '4) ';
        function test2() {
            $a .= $b;
            echo '$a en el ámbito global: ' . $GLOBALS['a'] . "<br>";
            echo '$a en el ámbito actual: ' . $a . "<br>";
            }
            $a .="Contenido de ejemplo";
            test2();
            echo '<br>';
        ?>

        <h2>Inciso 5</h2>
        <p>Dar el valor de las variables $a, $b, $c al final del siguiente script:</p>
        
        <?php
        $a = "7 personas";
        $b = (integer) $a;
        $a = "9E3";
        $c = (double) $a;
        ?>
        
        <h2>Inciso 6</h2>
        <p>Dar y comprobar el valor booleano de las variables $a, $b, $c, $d, $e y $f y muéstralas
        usando la función var_dump(<datos>).</p>
        <p>Después investiga una función de PHP que permita transformar el valor booleano de $c y $e
        en uno que se pueda mostrar con un echo:</p>

        <?php
        $a = "0";
        $b = "TRUE";
        $c = FALSE;
        $d = ($a OR $b);
        $e = ($a AND $c);
        $f = ($a XOR $b);

        var_dump ($a, $b, $c, $d, $e, $f);
        

        echo '<br><br>';
        if (!isset($c))
        echo "La variable \$c se ha inicializado y contiene $c.";
        else
        echo "La variable \$c no se ha inicializado o definido.";

        echo '<br><br>';
        if (!isset($e))
        echo "La variable \$e se ha inicializado y contiene $e.";
        else
        echo "La variable \$e no se ha inicializado o definido.";
        ?>

        <h2>Inciso 7</h2>
        <p>Usando la variable predefinida $_SERVER, determina lo siguiente:</p>
        <p>a. La versión de Apache y PHP, <BR>
            b.  El nombre del sistema operativo (servidor), <BR>
            c. El idioma del navegador (cliente).</p>

        <?php
        echo "1.- Version de Apache y PHP: ";
        echo $_SERVER["SERVER_SOFTWARE"];
        echo '<br>';

        echo "2.- El nombre del sistema operativo (servidor): ";
        echo $_SERVER["SERVER_NAME"];
        echo '<br>';

        echo "3.-  El idioma del navegador (cliente): ";
        echo $_SERVER["HTTP_ACCEPT_LANGUAGE"];
        echo '<br>';

        ?>
</body>
</html>