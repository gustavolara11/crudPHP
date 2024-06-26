<?php
  class Connection {
    public $host = 'localhost';
    public $user = 'root';
    public $pass = '';
    public $db = 'crudphp';

    public function getCon(){
      return $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }
    // lembrar de tentar juntar o CREATE e o UPDATE
    public function queryC($nome, $sobrenome, $nascimento, $cidade, $email){
      $sqlCreate = "INSERT INTO `cadastro`(`nome`, `sobrenome`, `nascimento`, `cidade`, `email`) 
      VALUES ('$nome', '$sobrenome', '$nascimento', '$cidade', '$email')";
      $query = mysqli_query($this->getCon(), $sqlCreate);
      if($query){
        echo "Usuário criado com sucesso.";
      }else {
        echo "Erro ao criar usuário.";
      }
    }    
    public function queryR($n){
      $sqlRead = "SELECT * FROM `cadastro` WHERE `nome` LIKE '%$n%' OR `sobrenome` LIKE '%$n%'";
      $query = mysqli_query($this->getCon(), $sqlRead);
      if(empty($query) || $query->num_rows == 0){
        echo "Usuário não encontrado.";
      }else{
        return mysqli_fetch_all($query, MYSQLI_ASSOC);
      }
    }    
    public function queryRid($id){
      $sqlRead = "SELECT * FROM `cadastro` WHERE `id` = $id";
      $query = mysqli_query($this->getCon(), $sqlRead);
      if(empty($query) || $query->num_rows == 0){
        echo "Usuário não encontrado.";
      }else{
        return mysqli_fetch_assoc($query);
      }
    }    
    public function queryU($id, $nome, $sobrenome,$nascimento, $cidade, $email){
      $sqlUpdate = "UPDATE `cadastro` SET `nome` = '$nome', `sobrenome` = '$sobrenome', `nascimento` = '$nascimento', `cidade` = '$cidade', `email` = '$email' WHERE `id` = '$id';";
      $query = mysqli_query($this->getCon(), $sqlUpdate);
      if($query){
        echo "Usuário atualizado com sucesso.";
      }else {
        echo "Erro ao atualizar usuário.";
      }
    }    
    public function queryD($id){
      $sqlDelete = "DELETE FROM `cadastro` WHERE `id` = $id;";
      $query = mysqli_query($this->getCon(), $sqlDelete);
      if($query){
        echo "Usuário deletado(a) com sucesso.";
      }else {
        echo "Erro ao deletar usuário.";
      }

    }    
  }
  
?>