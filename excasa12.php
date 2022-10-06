<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Casa</title>
</head>
<body>
    <form action="excasa12.php" method="get">
        altura= <input type="text" name="c"></br>
        <input type="submit" value="calcular">
    </form>

    <?php
    $c= $_GET["c"];
    $pesp= ((62.1*$c) - 44.7);

    echo "seu peso ideal é: " .$peso. "kg";

    ?>
</body>
</html>