<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
    $id = $_GET['id'];
    $nome = $_GET['nome'] ?? '';
    $sobrenome = $_GET['sobrenome'] ?? '';
    $nascimento = $_GET['nascimento'] ?? '';
    $cidade = $_GET['cidade'] ?? '';
    $email = $_GET['email'] ?? '';

    $sqlUpdate = "UPDATE `cadastro` SET `nome` = '$nome', `sobrenome` = '$sobrenome', `nascimento` = '$nascimento', `cidade` = '$cidade', `email` = '$email' WHERE `id` = '$id';";
    $query = mysqli_query($mysqli, $sqlUpdate);
    if($query){
      echo "Cadastro atualizado com sucesso.";
    }else{
      echo "Falha ao atualizar cadastro.";
    }
    echo "<br><br><a class='btn btn-secondary btn-ld' href='index.php'>Início</a>";
  ?>
      </div>
    </div>
  </div>

</body>

</html>