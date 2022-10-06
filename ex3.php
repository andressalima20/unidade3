<?php

$idade= $_GET["idade"];
if($idade >=16){
    echo"Pode votar...";
}else{
    echo"Não pode votar...";
}else if($idade <18){
    echo"Seu Voto é Facultativo...";
}else if($idade <=70){
    echo"Voto Obrigatório...";
}else{
    echo"Voto Facultativo...";
}

?>