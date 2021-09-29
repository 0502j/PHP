<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros via POST</title>
</head>
<body>

<?php
function validar_post($dado_enviado){
    if(isset($dado_enviado) and $dado_enviado <> ""){
        return TRUE;
    }
    return FALSE;
}

if(validar_post($_POST['firstName']) and validar_post($_POST['lastName'])){
    echo '<br><br>';
    echo 'Nome: '.$_POST['firstName'];
    echo '<br><br>';
    echo 'Sobrenome: '.$_POST['lastName'];
    /*
    Inserir os dados no banco de dados MySQL
    */

    $primeironome = $_POST['firstName'];
    $segundonome = $_POST['lastName'];

    require_once('dados_banco.php');

    // Criar Conexão
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "INSERT INTO pessoa(firstName, lastName)
    VALUES ('$primeironome', '$segundonome')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

}

?>
</body>
</html>