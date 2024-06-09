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
  <header>
    <br><br>
  </header>
  <main>
    <div class="container-md">
      <div class="card">
        <br>
        <h1 class="text-center">Cadastro de Usuários</h1>
        <div class=" card-body">
          <form action="POO/user_object.php" method="get" class="mb-3">
            <label class="form-label" for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome" required>
            <label class="form-label" for="nome">Sobrenome:</label>
            <input class="form-control" type="text" name="sobrenome" id="sobrenome" required>
            <label class="form-label" for="nome">Nascimento:</label>
            <input class="form-control" type="date" name="nascimento" id="nascimento" required>
            <label class="form-label" for="nome">Cidade:</label>
            <input class="form-control" type="text" name="cidade" id="cidade" required>
            <label class="form-label" for="nome">E-mail:</label>
            <input class="form-control" type="text" name="email" id="email" required>
            <br>
            <input type="submit" value="Cadastrar" class="btn btn-primary btn-lg">
          </form>
          <a class="btn btn-secondary btn-ld" href="pesquisa.php">Pesquisar</a>
        </div>
      </div>
    </div>
  </main>

</body>

</html>