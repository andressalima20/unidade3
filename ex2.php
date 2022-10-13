<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício2</title>
</head>
<body>
    <form action=ex2.php method="GET">
        Digite um salário:<br/>
        <input type="text" name="salario"><br/>
        Digite o total gasto:<br/>
        <input type="text" name="totg"><br/><br/>
        <input type="submit" value="calcular"/>
    </form>

    <?php
    $salario = $_GET["salario"];
    $totg = $_GET["totg"];
    if (totg > salario){
        echo "Orçamento estourado";
    }else{
        echo "Gastos dentro do orçamento";
    }
    ?>

</body>
</html>