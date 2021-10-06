<?php

require_once('dados_banco.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    try {
        $conn = new PDO('mysql:host=localhost;dbname=alunosfatec', $username, $password);
        $stmt = $conn->prepare('SELECT * FROM aluno WHERE alunoId = :id');
        $stmt->execute(array('id' => $id));
      
        $result = $stmt->fetchAll();
      
        if ( count($result) ) {
          foreach($result as $row) {
            echo '<br><br>';
            echo  '    '.'Aluno encontrado:';
            print_r($row);
            echo '<br><br>';


          }
        } else {
            echo '<br><br>';
            echo "Nenhum resultado retornado. Verifique se o aluno está registrado ou se o valor foi inserido.";
            echo '<br><br>';
        }
      } catch(PDOException $e) {
          echo 'ERROR: ' . $e->getMessage();
      }
      
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

            .form-group{
                text-align: center;
            }
        
    </style>

</head>
<body>
    <div class="inicial justify-content-center" style="padding:40px;">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>ID do aluno:</label>
                        <input type="text" name="id" class="form-control" id="id">
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