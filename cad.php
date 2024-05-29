<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CrudPHP+MySQL</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

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
  <br><a href="index.php">Voltar</a>
</body>

</html>