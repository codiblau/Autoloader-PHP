<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Demo Autoloader PHP</h1>
        <?php
        require_once '../../lib/autoload.php';
        
        $var1 = new Class1();
        $var1->demo();
        
        echo "<br>";
        
        $var2 = new Class2();
        $var2->demo();
        ?>
    </body>
</html>

