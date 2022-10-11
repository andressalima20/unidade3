<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explica5</title>
</head>
<body>
    <form action="explica5.php" method="get">
       Informe o valor do salário: <br/>
       <input type="number" name="salario" >
       <br/><br/>
       <input type="submit" value="calcular">
    </form>

    <?php

    $salario = $_GET["salario"];
    if($salario < 280){
        $reajuste = ($salario * 20)/100;
        $novosalario = $salario + $reajuste;
        echo "Valor do Reajuste:" .$reajuste;
        echo "Valor do Salario Antigo:" .$salario;
        echo "Valor do Novo Salario:" .$novosalario;

    }else if($salario >= 280 && $salario < 700){
        $reajuste = ($salario * 15)/100;
        $novosalario= $salario + $reajuste;
        echo "Valor do Reajuste:" .$reajuste;
        echo "Valor do Salario Antigo:" .$salario;
        echo "Valor do Novo Salario:" .$novosalario;

    }else if($salario >= 700 && $salario < 1500){
        $reajuste = ($salario * 10)/100;
        $novosalario = $salario + $reajuste;
        echo "Valor do Reajuste:" .$reajuste;
        echo "Valor do Salario Antigo:" .$salario;
        echo "Valor do Novo Salario:" .$novosalario;

    }else{
        $reajuste = ($salario * 5)/100;
        $novosalario = $salario + $reajuste;
        echo "Valor do Reajuste:" .$reajuste;
        echo "Valor do Salario Antigo:" .$salario;
        echo "Valor do Novo Salario:" .$novosalario;
    }
    ?>

</body>
</html>