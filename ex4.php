<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ex4.php" method="GET">
      Digite um número:<br/>
      <input type="number" name="num">
      <input type="submit" name="Enviar">
   </form>

  <?php
  if (isset($_GET["num"])) {
       $num = $_GET["num"];
      if ($num >0) {
          for ($i=1 ; $i <= $num; $i++) {
           echo $i." , ";
          }
      }else{
          echo"Considere entrar com numero positivo";
      }
  }
  ?>
  
</body>
</html>