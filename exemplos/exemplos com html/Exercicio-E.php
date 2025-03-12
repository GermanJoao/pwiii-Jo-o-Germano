
<?php


$n1 = 155;
$n2 = 1.80;

$imc = $n1/($n2*$n2);

if ($imc <= 18.5){
    echo "<br> Seu imc é ", $imc ,", e você esta abaixo do peso";
}

else if($imc > 18.5 && $imc <= 24.99){
    echo "<br> Seu imc é ", $imc ,", e seu peso esta normal";
}

else if($imc > 25 && $imc <= 29.9){
    echo "<br> Seu imc é ", $imc ,", e você esta sobrepeso";
}
else if($imc > 30 && $imc <= 34.9){
    echo "<br> Seu imc é ", $imc ,", e você esta com obesidade Grau I";
}
else if($imc > 35 && $imc <= 39.9){
    echo "<br> Seu imc é ", $imc ,", e você esta com obesidade Grau II";
}
else if ($imc > 40){
    echo "<br> Seu imc é ", $imc ,", e você esta com obesidade Grau III";
}
?>
