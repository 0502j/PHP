<?php

require_once('dados_banco.php');


$curso = $_POST['curso'];

if ($curso == 'DSM' or  $curso == 'GE' or $curso == 'SI') {

    /*INICIO DO SELECT PARA MOSTRAR OS DADOS A PARTIR DO CURSO*/
    try {
        $conn = new PDO('mysql:host=localhost;dbname=alunosfatec', $username, $password);
        $stmt = $conn->prepare('SELECT COUNT(alunoId) FROM aluno WHERE curso = :curso');
        $stmt->execute(array('curso' => $curso));

        $result = $stmt->fetchAll();

        if (count($result)) {
            foreach ($result as $row) {
                echo '<br><br>';
                echo  '    ' . 'Quantidade de encontrados no curso digitado:';
                print_r($row);
                echo '<br><br>';
            }
        } 
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

    /*FIM DO SELECT*/
}else{
    echo '<br><br>';
    echo "Nenhum resultado retornado. Verifique o curso digitado (DSM, GE, SI)";
    echo '<br><br>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <title>Exibir alunos</title>

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
    <div class="inicial justify-content-center" style="padding:40px;">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Curso:</label>
                <input type="text" name="curso" class="form-control" id="curso">
                <span class="help-block"></span>
            </div>

            <div class="form-group">
                <div class="d-flex justify-content-center">
                    <input type="submit" class="btn btn-info" value="Ver">
                </div>
            </div>

        </form>
    </div>


</body>

</html>