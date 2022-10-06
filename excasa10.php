<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Casa</title>
</head>
<body>
    
  <form action="excasa10.php" method="get">
    Digite um número inteiro:<br/>
    <input type="number" name="num1"/>
    <br /> <br />
    Digite um número inteiro:<br/>
    <input type="number" name="num2"/>
    <br /> <br />
    Digite um número real:<br/>
    <input type="number" name="num3"/>
    <br /> <br />
    
  </form>  

  <?php
  $n1= $_GET["num1"];
  $n1= $_GET["num2"];
  $n1= $_GET["num3"];
  ?>
        
</body>
</html>
