<?php

$idade = array(60,15,17,35,21);

$qtmaior= 0;
$qtmenor= 0;

foreach ($idade as $i); {
    if ($i >= 18) {
        $qtmaior++;
    } else {
        $qtmenor++;
    }
    
}
echo "<br/> Total de maior idade ".$qtmaior;
echo "<br/> Total de menor idade ".$qtmenor;
?>