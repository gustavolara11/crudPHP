<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deleção de Usuário</title>
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
        $idDelete = $_GET['id'];
      
        $sqlDelete = "DELETE FROM `cadastro` WHERE `id` = $idDelete;";
        $query = mysqli_query($mysqli, $sqlDelete);
        if($query){
          echo "Usuário deletado(a) com sucesso.";
        }else {
          echo "Erro ao deletar usuário.";
        }
        echo "<br><br><a class='btn btn-secondary btn-ld' href='index.php'>Início</a>";
    ?>
      </div>
    </div>
  </div>
</body>

</html>