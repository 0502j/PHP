<?php
 


if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];

    if (isset($nome)) {
        echo "Pessoa cadastrada com sucesso: " .PHP_EOL;
        print_r($_POST) .PHP_EOL;
        echo "Acesse o log pessoas_cadastradas.txt!";
        $arquivo = fopen('pessoas_cadastradas.txt', 'a+');  
        fwrite($arquivo, $nome .PHP_EOL);
        fwrite($arquivo, $cpf .PHP_EOL);
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
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <p>Insira os dados de cadastro:</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" id="nome">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>CPF</label>
                <input type="cpf" name="cpf" class="form-control" id="cpf">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
           
        </form>
        <a href="pessoas_cadastradas.txt">
                <button>Visualizar log/cadastros</button>
            </a>
        </div>
        


    </div>    
</body>
</html>