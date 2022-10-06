<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Casa</title>
</head>
<body>
    
   <form action="excasa3.php" method="get">
        Primeiro Número:<br/>
        <input type="number" name="num1" placeholder="Digite o número 1"/>
        <br /> <br />
        Segundo Número:<br/>
        <input type="number" name="num2" placeholder="Digite o número 2"/>
        <br /> <br />

        <input type="submit" value="CALCULAR">
    </form>

    <?php
    $n1= $_GET["num1"];
    $n2= $_GET["num2"];

    $somar= $n1 + $n2;
   
    echo"<br/> A soma de " .$n1. " com " .$n2. " é: " .$somar;
    ?>

</body>
</html>