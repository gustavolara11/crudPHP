<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CrudPHP+MySQL</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include 'conexao.php';?>
  <pre>
  <form action="cad.php" method="get">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome">
    <label for="nome">Sobrenome:</label>
    <input type="text" name="sobrenome" id="sobrenome">
    <label for="nome">Nascimento:</label>
    <input type="date" name="nascimento" id="nascimento">
    <label for="nome">Cidade:</label>
    <input type="text" name="cidade" id="cidade">
    <label for="nome">E-mail:</label>
    <input type="text" name="email" id="email">
    <br>
    <input type="submit" value="Cadastrar">
  </form>
  </pre>
  <br><br><br>
  <pre>
    <table>
    <tr><th>Nome</th><th>Sobrenome</th><th>Nascimento</th><th>Cidade</th><th>E-mail</th></tr>
    <?php 
    $sql = "SELECT * FROM `cadastro`";
    $dados = mysqli_query($mysqli, $sql);
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
            </tr>";
    }
   
    ?> 
    

    </table>
  
   
  </pre>

</body>

</html>