<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}else{

    if (isset($_POST['log'])) {
        header("location: alunos_cadastrados.txt");
    }

}


?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Bem vindo ao sistema</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="estilo_geral.css">

    <style type="text/css">
        body{ 
        text-align: center; 
        }
    
    </style>

</head>
<body>
    <div class="d-flex justify-content-center py-5">  
        <div class="inicial justify-content-center">  
        <div class="page-header">
                <h2 style="padding-top:30px;">Olá <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
                <br>
                </b>Bem vindo(a) ao sistema de cadastro de alunos</h2>
            </div>
            <p>
                <br>
                <h4>Selecione uma operação: </h4>
                <br>
                <a href="cadastro_alunos.php" class="btn btn-info">Cadastrar alunos no sistema</a>
                <br><br>
                <a href="update_alunos.php" class="btn btn-info">Atualizar alunos cadastrados</a>
                <br><br>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form">
                <input type="submit" name="log" class="btn btn-info" value="Visualizar alunos registrados (txt)" id="log">
                </div>
                </form>
                <br>
                <a href="visualiza_alunos.php" class="btn btn-info">Visualizar alunos registrados (banco)</a>
                <br><br>
                <a href="sair.php" class="btn btn-info">Sair do sistema</a>
                <br><br>

            </p>
            <br>
        </div>

    </div>
        
</body>
</html>