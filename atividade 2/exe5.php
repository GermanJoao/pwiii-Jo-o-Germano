<!--Escreva um algoritmo que leia a altura e o peso de uma pessoa, calcule o seu IMC
(Índice de Massa Corporal) e exiba para o usuário
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe5</title>
</head>
<body>
    <H1>
    <center>
<?php
$peso = 80;
$altura = 1.80;
$imc = $peso/($altura*$altura);

echo "Seu IMC é: ",$imc;
?>
</center>
</H1>
</body>
</html>

