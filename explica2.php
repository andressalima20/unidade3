<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explica2</title>
</head>
<body>
    <form action="explica2.php" method="get">
        <p>Digite a letra:</p>
        <input type="text" name="letra"/> <br/><br/>
        <input type="submit" value="verificar">
   </form>

   <?php
   
   $letra= $_GET["letra"];
   if($letra =="a" || $letra =="e" || $letra="i" || $letra =="o" || $letra =="u"){
    echo "<br/> é uma vogal";
   }else{
    echo "<br/> é uma consoante";
   }
   ?>
   
</body>
</html>