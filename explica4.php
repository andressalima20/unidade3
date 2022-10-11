<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explica4</title>
</head>
<body>
    <form action="explica4.php" method="GET">
        <p>4. Digite M-matutino, V-vespertino ou N-noturno: </p>
        Digite aqui: <input type="text" name="turno">
        <input type="submit" value="verificar">
   </form>

   <?php

   $turno= $_GET["turno"];

   if($turno == "m"){
    echo "<br/> bom dia";
   }else if ($turno == "v"){
    echo "<br/> boa tarde";
   }else if ($turno == "n"){
    echo "<br/> boa noite";
   }else if {
    echo "<br/> valor invalido";
   }
   ?>

</body>
</html>