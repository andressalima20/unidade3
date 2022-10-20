<?php

$nome = array("Andrea","Andressa","Rafaela","Thamilliz","Josiane","Isaac","Byanka");
$nota = array(10,9,8,7,6,5,4);

$media = 0;
$soma = 0;
$contador = 0;

foreach($nota as $n) {
    $soma= $soma + $n;
    $contador++;
}

    echo "<br/> A soma das notas é: ".$soma;
    echo "<br/> A quantidade de alunos é: ".$contador;
    echo "<br/> A média da turma é:".($soma / $contador);
    $media = $soma / $contador;
    echo "<br/> A média da turma é: ".$media;

    foreach($nota as $chave => $n) {
        
        if($n >= $media){
            echo "<br/> O aulno ".$nome[$chave]. " Teve nota acima da média ".$nota."<br/>";
        }else{
            echo "<br/> O aluno ".$nome[$chave]. " Teve nota abaixo da média ".$nota."<br/>";
        }
    }
?>
