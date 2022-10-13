<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício1</title>
</head>
<body>
    <form action="ex1.php" method="GET">
        Digite um número:<br/>
        <input type="text" name="num"/><br/><br/>
        <input type="submit" value="verificar"/>
    </form>
    
    <?php
   $num = $_GET["num"];
   if($num > 10){
    echo "<br/> O número é maior que 10.";
   }
    ?>

</body>
</html>