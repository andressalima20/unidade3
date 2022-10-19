<?php
$carro = array("gol","celta","fox","corola","civic");
var_dump($carro);
echo"<br/>==========<br/>";

$carros1[]="gol";
$carros1[]="hilux";
$carros1[]="camaro";
$carros1[]="ferrari";
$carros1[]="porsche";
$carros1[]="brasília";
var_dump($carros1);

echo"<br/>==========<br/>";
echo" eu tenho um ".$carros1[0];

echo"<br/>==========<br/>";
echo" eu tenho um ".$carro[0];

foreach($carro as $car){
    echo $car."<br/>";
}
?>