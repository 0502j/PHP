<?php
 session_start();
 //Se voltar a página após visualizar cadastro não perde a sessão
 header('Cache-Control: no cache');

 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
     header("location: index.php");
     exit;
 }else{
    if (isset($_POST['nome']) && isset($_POST['cpf'])) {
        echo "Pessoa cadastrada com sucesso: " .PHP_EOL;
        print_r($_POST) .PHP_EOL;
        echo "Acesse os registros em alunos_cadastrados.txt!";
        $arquivo = fopen('alunos_cadastrados.txt', 'a+');  
        fwrite($arquivo, $_POST['nome'] .PHP_EOL);
        fwrite($arquivo, $_POST['idade'] .PHP_EOL);
        fwrite($arquivo, $_POST['curso'] .PHP_EOL);
        fwrite($arquivo, $_POST['cpf'] .PHP_EOL);
        fwrite($arquivo, "---------" .PHP_EOL);

        echo '<br><br>';
        echo 'Nome: '.$_POST['nome'];
        echo '<br><br>';
        echo 'Curso: '.$_POST['curso'] .PHP_EOL;
        echo '<br><br>';
  
        /*INICIO DA INSERÇÃO*/
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $curso = $_POST['curso'];
        $cpf = $_POST['cpf'];
    
        require_once('dados_banco.php');
    
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        
        $sql = "INSERT INTO aluno(nome, idade, curso,cpf)
        VALUES ('$nome', '$idade','$curso','$cpf')";
        
        if (mysqli_query($conn, $sql)) {
            echo "A operação foi um sucesso. Verifique o banco de dados!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        mysqli_close($conn);

        /*FIM DA INSERÇÃO*/

    }
    
 }



?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

    <style type="text/css">
        .inicial{
        background-color: aliceblue;
        display: flex;
        justify-content: center;
        }

        body{
            font: 14px sans-serif;
            background-color: #92a9d1;
            }

            .inicial{
            background-color: aliceblue;

            }
            .wrapper{ 
            width: 350px; padding: 20px; 
            }
        
    </style>

</head>
<body>
    <div class="d-flex justify-content-center py-5">
        <div class="inicial justify-content-center">
            <div class="wrapper">
                <h2 style="text-align: center;">Insira os dados do aluno:</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome">
                        <span class="help-block"></span>
                    </div>    
                    <div class="form-group">
                        <label>Idade</label>
                        <input type="text" name="idade" class="form-control" id="idade">
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label>Curso matriculado</label>
                        <input type="text" name="curso" class="form-control" id="curso">
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" name="cpf" class="form-control" id="cpf">
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <div class="d-flex justify-content-center">
                            <input type="submit" class="btn btn-info" value="Cadastrar">
                        </div>
                    </div>
                
                </form>
            
            </div>    
        </div>
    </div>
</body>
</html>