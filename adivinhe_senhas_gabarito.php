<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhando a senha</title>
</head>
<body>


<?php

$senha = 'senhalegal';

 print_r($_POST);
 $adivinha = $_POST['senha'];

 if($adivinha == $senha){
    echo "Voce acertou a senha!";
 }else{
     echo "Voce errou.";
     //Abrindo o arquivo para gravar as senhas erradas
     $arquivo = fopen('adivinhe_senhas_enviadas.txt', 'a');  
     fwrite($arquivo, $adivinha .PHP_EOL); // Grava os dados no arquivo
 }


?>



</body>
</html>