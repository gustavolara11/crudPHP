<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CrudPHP+MySQL</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color:#d2d2d2;">
  <?php 
  include 'conexao.php';
   $idup = $_GET['id'];
   $sql = "SELECT * FROM `cadastro` WHERE `id` = $idup";
   $dados = mysqli_query($mysqli, $sql);
    $linha = mysqli_fetch_assoc($dados);
      $id = $linha['id'];
      $nome = $linha['nome'];
      $sobrenome = $linha['sobrenome'];
      $nascimento = $linha['nascimento'];
      $cidade = $linha['cidade'];
      $email = $linha['email'];
    
  ?>
  <header>
    <br><br>
  </header>
  <main>
    <div class="container-md">
      <div class="card">
        <br>
        <h1 class="text-center">Atualizar Usuários</h1>
        <div class=" card-body">
          <form action="cad_update.php" method="get" class="mb-3">
            <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
            <label class=" form-label" for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $nome;?>" required>
            <label class="form-label" for="nome">Sobrenome:</label>
            <input class="form-control" type="text" name="sobrenome" id="sobrenome" value="<?php echo $sobrenome;?>"
              required>
            <label class="form-label" for="nome">Nascimento:</label>
            <input class="form-control" type="date" name="nascimento" id="nascimento" value="<?php echo $nascimento;?>"
              required>
            <label class="form-label" for="nome">Cidade:</label>
            <input class="form-control" type="text" name="cidade" id="cidade" value="<?php echo $cidade;?>" required>
            <label class="form-label" for="nome">E-mail:</label>
            <input class="form-control" type="text" name="email" id="email" value="<?php echo $email;?>" required>
            <br>
            <input type="submit" value="Atualizar" class="btn btn-primary btn-lg">
          </form>
          <a class="btn btn-secondary btn-ld" href="index.php">Início</a>
        </div>
      </div>
    </div>
  </main>


</body>

</html>