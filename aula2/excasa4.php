<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício casa</title>
</head>
<body>

   <form action="excasa4.php" method="get">
     Nota 1: <input type="text" name="num1"><br>
     Nota 2: <input type="text" name="num2"><br>
     Nota 3: <input type="text" name="num3"><br>
     <input type="submit">
   </form>
 
  <?php 
  $n1= $_GET["num1"];
  $n2= $_GET["num2"];
  $n3= $_GET["num3"];
  
  $media= ($n1 + $n2 + $n3)/3;
  
  echo "Média:" .$media;
  ?>

</body>
</html>