<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício4</title>
</head>
<body>
    <form action="ex4.php" method="GET">
        Digite um número:<br/>
        <input type="text" name="n1"/><br/>
        Digite outro número:<br/>
        <input type="text" name="n2"/><br/><br/>
        <input type="submit" value="verificar"/>
    </form>

    <?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    if($n1 > $n2){
        echo "O número 1" .$n1. " é maior que " .$n2;
    }else{
        echo "O número 2" .$n2. " é maior que " .$n1;
    }
    ?>

</body>
</html>