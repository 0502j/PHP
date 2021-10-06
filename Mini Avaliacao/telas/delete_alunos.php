<?php
session_start();
//Se voltar a página após visualizar cadastro não perde a sessão
header('Cache-Control: no cache');

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
} else {
    if (isset($_POST['id'])) {

        /*INICIO DO DELETE*/
        require_once('dados_banco.php');

        $id = $_POST['id'];

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "DELETE FROM aluno WHERE alunoId=$id";
            $conn->exec($sql);
            echo "<br>";
            echo "Registro do aluno deletado com sucesso." .PHP_EOL;
            echo "<br>";
            
        }
        catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
            }

        $conn = null;

        /*FIM DO DELETE*/
    }
}


?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <title>Deletar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

    <style type="text/css">
        .inicial {
            background-color: aliceblue;
            display: flex;
            justify-content: center;
        }

        body {
            font: 14px sans-serif;
            background-color: #92a9d1;
        }

        .inicial {
            background-color: aliceblue;

        }

        .wrapper {
            width: 350px;
            padding: 20px;
        }

        .form-group {
            text-align: center;
        }
        
    </style>

</head>

<body>
    <div class="d-flex justify-content-center py-5">
        <div class="inicial justify-content-center">
            <div class="wrapper">
                <h3 style="text-align: center; margin-bottom:3rem;">Digite o ID para remoção:</h3>
                <br>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <div class="form-group">
                        <label>ID:</label>
                        <input type="text" name="id" class="form-control" id="id">
                        <span class="help-block"></span>
                    </div>
                    
                    <div class="form-group">
                        <div class="d-flex justify-content-center">
                            <input type="submit" class="btn btn-info" value="Remover">
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>

</html>