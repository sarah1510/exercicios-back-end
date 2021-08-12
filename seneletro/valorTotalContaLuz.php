<?php

$consumo= $_POST["consumo"];
$nome= $_POST["nome"];
$endereco= $_POST["endereco"];
$agradecimento = "Obrigado por economizar!";


if($consumo >120) {

    
$valorConta= 0.42 * $consumo;

    echo "<br> <font size='5'> <b> Conta de luz de  $nome </b> </font> <br>";
    echo "$endereco. <br>";
    echo "<font color='red'> Consumo: $consumo kWh </font> <br>";
    echo "O valor a pagar:  <font size='5'> <b> R$$valorConta </b> </font> <br>";




} else if ($consumo <= 120) {

    $valorConta= $consumo * 0.32;

    echo "<br> <font size='5'> <b> Conta de luz de $nome </b> </font> <br>";
    echo "$endereco. <br>";
    echo "<font color='green'> Consumo: $consumo kWh </font> <br>";
    echo "O valor a pagar:  <font size='5'> <b> R$$valorConta </b> </font> <br>";
    echo $agradecimento;
}





// ?>
// <!DOCTYPE html>
// <html lang="pt-BR">
// <head>
//     <meta charset="UTF-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title></title>
// </head>
// <body>
    
// </style>
// </body>
// </html>
