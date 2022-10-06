<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Casa</title>
</head>
<body>
<html>

 <form action="excasa8.php" method="get">
  Temperatura em Celsius: <input type="text" name="C"><br>
  <input type="submit">
 </form>
 
 <?php 
  $C = $_GET["C"];
  $F = (9/5)*$C + 32;  
    
  echo "Em Farenheit: $F <br /><br />";
 ?>

</body>
</html>