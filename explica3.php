<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explica3</title>
</head>
<body>
    <form action="explica3.php" method="GET">
        <p>Vamos somar:</p>
            Digite o 1º número; <input type="number" name="num1"/><br/><br/>
            Digite o 2º número; <input type="number" name="num2"/><br/><br/>
            Qual a operação desejada ? <input type="text" name="operacao"/>
            <inpu type="submit" value="calcular"/>
   </form> 

   <?php

   $num1= $_GET["num1"];
   $num2= $_GET["num2"];
   $operacao= $_GET["operacao"];

   if ($operacao == "+") {
    $aux= $num1 + $num2;
    echo "<br/> a soma de " .$num1. " com " .$num2. " é : " .$aux;
   }else if ($operacao == "-"){
    $aux= $num1 - $num2;
    echo "<br/> a diferenca de " .$num1. " com " .$num2. " é : " .$aux2;
   }else if ($operacao =="*"){
    $aux= $num1 * $num2;
    echo "<br/> a multiplicacao de " .$num1. " com " .$num2. " é : " .$aux3;
   }else if ($operacao == "/"){
    $aux= $num1 / $num2;
    echo "<br/> a divisao de " .$num1. " com " .$num2. " é : " .$aux4;
   }else if {
    echo "operacao invalida.";
   }
   ?>
   
</body>
</html>