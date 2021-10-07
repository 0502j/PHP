<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
} else {

    /*Envia para o arquivo alunos_cadastrados.txt*/
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
                <h2 style="padding-top:30px;">Relatório de alunos</h2>
            </div>
            <p>
            <div class="btn-group">
                <br>
                <h4>Selecione um relatório: </h4>
                <br>
                <a href="visualiza_alunos.php" class="btn btn-info">Visualizar alunos (banco de dados)</a>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form">
                        <input type="submit" name="log" class="btn btn-info" value="Visualizar alunos (txt)" id="log">
                    </div>
                </form>
                <a href="visualiza_alunos_curso.php" class="btn btn-info">Quantidade de alunos por curso</a>
                </p>
            </div>
            <br>
            <br>
        </div>

    </div>

</body>

</html>