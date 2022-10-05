<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Casa</title>
</head>
<body>

<form  action="excasa2.php" method="get">
  Numero: <input type="text" name="num"><br>
  <input type="submit">
 </form>
 
 <?php 
  
  $num = $_GET["num"];
  
  echo "o numero informado foi: $num <br />";
  ?>

</body>
</html>