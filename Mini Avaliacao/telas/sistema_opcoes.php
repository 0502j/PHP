<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
} else {

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
        body {
            text-align: center;
        }

        .btn {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-bottom: 2rem;
        }

        .btn-group {
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
            <div class="btn-group">
                <br>
                <h4>Selecione uma operação: </h4>
                <br>
                <a href="cadastro_alunos.php" class="btn btn-info">Cadastrar alunos</a>
                <a href="update_alunos.php" class="btn btn-info ">Atualizar alunos</a>
                <a href="delete_alunos.php" class="btn btn-info ">Remover alunos</a>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <a href="visualiza_alunos.php" class="btn btn-info ">Visualizar alunos (banco)</a>
                    <div class="form">
                        <input type="submit" name="log" class="btn btn-info" value="Visualizar alunos (txt)" id="log">
                    </div>
                </form>
                <a href="sair.php" class="btn btn-info">Sair do sistema</a>


                </p>
            </div>
            <br>
        </div>

    </div>

</body>

</html>