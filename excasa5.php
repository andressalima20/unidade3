<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Casa</title>
</head>
<body>
    <form action="excasa5.php" method="get">
    Metros: <input type="text" name="num1"/>
    <br/>
    <input type="submit" value="Calcular"/>

    </form>
 
<?php 
$metros = $_GET["num1"];       

$centimetro = $metros * 100;

echo"o Resultado é:   " .$centimetro; 
?>

</body>
</html>