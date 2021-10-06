<?php
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'jamile' and $_POST['password'] == '1234'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Jamile de Sousa';
         header("location: sistema_opcoes.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
} 
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo_geral.css">
    
</head>
<body>
    <div class="d-flex justify-content-center py-5">
        <div class="inicial justify-content-center">
        <div class="wrapper">
            <h2 style="text-align: center;">Acessar o sistema</h2>
            <p style="text-align: center;">Insira login e senha para o usuário Jamile.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" name="username" class="form-control" value="jamile">
                    <span class="help-block"></span>
                </div>    
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="password" class="form-control" value="1234">
                    <span class="help-block"></span>
                </div>
                <br>
                <div class="form-group">
                    <div class="d-flex justify-content-center">
                        <input type="submit" class="btn btn-info" value="Acessar">
                    </div>
                </div>
                <div></div>
            </form>
        </div>   

    </div>
        </div>

     
</body>

</html>