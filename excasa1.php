<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Casa</title>
</head>
<body>
    <form action="excasa1.php" method="get">
        Digite o Valor do Raio:
        <input type="number" name="raio"/>
        <br/><br/>
        <input type="submit" value="Calcular Raio">
   </form>

   <?php
   $raio= $_GET["raio"];

   $m_pi= 3.1415;
   $area= $m_pi * $raio**2;
   $perimetro= 2 * $m_pi * $raio;

   echo "<br/>O Valor da Área ".$area. " Do Raio Informado ".$raio;
   echo "<br/>O Valor do Perímetro do Raio " .$raio. " é " .$perimetro;
   ?>
    
</body>
</html>