<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Casa</title>
</head>
<body>

    <form action="excasa7.php" method="get">
      Quanta você ganha por hora:<br/>
      <input type="number" name="num1"/>
        <br /> <br />
      Número de horas trabalhadas no mês:
      <input type="number" name="num2"/>
        <br /> <br />

        <input type="submit" value="CALCULAR">
    </form>

    <?php
    $n1= $_GET["num1"];
    $n2= $_GET["num2"];

    $multiplicar= $n1 * $n2;
   
    echo"<br/> O total do salário no referido mês é: " .$multiplicar;
    ?>

</body>
</html>