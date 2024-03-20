<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício IMC</title>
</head>
<body>
    <?php
        $peso = 78;
        $altura = 1.75;

        $imc = $peso/$altura ** 2;

        if ($imc <= 18.5 ) {
            echo "Peso: $peso<br>Altura: $altura<br>Seu IMC é: $imc<br> Situação: Magreza";
        } else if ($imc <= 24.9 && $imc >= 18.5) {
            echo "Peso: $peso<br>Altura: $altura<br>Seu IMC é: $imc<br> Situação: Normal";
        } elseif($imc <= 29.9 && $imc >= 25) {
            echo "Peso: $peso<br>Altura: $altura<br>Seu IMC é: $imc<br> Situação: Acima do peso";
        } elseif($imc <= 34.9 && $imc >= 30) {
            echo "Peso: $peso<br>Altura: $altura<br>Seu IMC é: $imc<br> Situação: Obesidade grau I";
        } elseif($imc <= 40 && $imc >= 35) {
            echo "Peso: $peso<br>Altura: $altura<br>Seu IMC é: $imc<br> Situação: Obesidade grau II";
        } elseif($imc >= 40) {
            echo "Peso: $peso<br>Altura: $altura<br>Seu IMC é: $imc<br> Situação: Obesidade grau III";
        } 
    ?>
</body>
</html>