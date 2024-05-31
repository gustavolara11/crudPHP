<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CrudPHP+MySQL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <br><br>
  <div class="container-md">
    <div class="card">
      <div class="card-body">
        <?php 
          include 'conexao.php';

            $nome = $_GET['nome'];
            $sobrenome = $_GET['sobrenome'];
            $nascimento = $_GET['nascimento'];
            $cidade = $_GET['cidade'];
            $email = $_GET['email'];

            $sql = "INSERT INTO `cadastro`(`nome`, `sobrenome`, `nascimento`, `cidade`, `email`) 
            VALUES ('$nome', '$sobrenome', '$nascimento', '$cidade', '$email')";

            $sqlquery = mysqli_query($mysqli, $sql);
              if($sqlquery){
                Echo "Pessoa cadastrada com sucesso.";
              }else {
                echo "Erro ao cadastrar ". $nome . ".";
              }
          ?>
        <br><br><a class="btn btn-secondary btn-ld" href="index.php">Voltar</a>
      </div>
    </div>
  </div>

</body>

</html>