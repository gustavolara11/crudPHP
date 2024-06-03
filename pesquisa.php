<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CrudPHP+MySQL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color:#d2d2d2;">

  <?php include 'conexao.php';?>
  <header>
    <br><br>
  </header>
  <main>
    <div class="container-md">
      <div class="card">
        <br>
        <h1 class="text-center">Pesquisa de Usuários</h1>
        <div class="card-body">
          <form action="" method="get" class="mb-3">
            <label class="form-label" for="pesquisa">Digite o nome:</label>
            <input class="form-control" type="search" name="busca" id="busca" autofocus>
            <br>
            <input type="submit" value="Pesquisar" class="btn btn-primary btn-ld">
          </form>
          <a class="btn btn-secondary btn-ld" href="index.php">Voltar</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h1 class="text-center">Usuários Cadastrados</h1><br>
          <table class="table table-striped table-hover">
            <tr>
              <th>Nome</th>
              <th>Sobrenome</th>
              <th>Nascimento</th>
              <th>Cidade</th>
              <th>E-mail</th>
              <th>Editar / Deletar</th>
            </tr>
            <?php
              $busca = $_GET['busca'] ?? ''; 
              while ($linha = mysqli_fetch_assoc($dados)){
                $id = $linha['id'];
                $nome = $linha['nome'];
                $sobrenome = $linha['sobrenome'];
                $nascimento = $linha['nascimento'];
                $cidade = $linha['cidade'];
                $email = $linha['email'];
                
                echo "<tr>
                      <td>$nome</td>
                      <td>$sobrenome</td>
                      <td>$nascimento</td>
                      <td>$cidade</td>
                      <td>$email</td>
                      <td><a href='update.php?id=$id'>Editar</a> / <a href='delete.php?id=$id'>Deletar</a></td>
                    </tr>";
                }
            ?>
          </table>
        </div>
      </div>
    </div>
  </main>
</body>

</html>