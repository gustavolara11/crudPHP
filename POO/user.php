<?php
  
require_once 'Connection.php';

class User {
  protected $id;
  protected $nome;
  protected $sobrenome;
  protected $nascimento;
  protected $cidade;
  protected $email;
    
  public function __construct($id = false){
    $connection = new Connection();
    if($id){
      $data = $connection->queryR($id);
        $this->id = $data['id'];
        $this->nome = $data['nome'];
        $this->sobrenome = $data['sobrenome'];
        $this->nascimento = $data['nascimento'];
        $this->cidade = $data['cidade'];
        $this->email = $data['email'];
    }
  }
  public function save($id, $nome, $sobrenome, $nascimento, $cidade, $email){
    $connection = new Connection();
    if(!empty($id)){
      $connection->queryU($id, $nome, $sobrenome, $nascimento, $cidade, $email);
    }else{
      $connection->queryC($nome, $sobrenome, $nascimento, $cidade, $email);
    }
  }
  public function load($name){
    if(isset($name)){
      $connection = new Connection();
      $dados = $connection->queryR($name);
      
      $arr = array();
      foreach ($dados as $dado) {
        $object = new User;
        $object->setId($dado['id']);
        $object->setNome($dado['nome']);
        $object->setSobrenome($dado['sobrenome']);
        $object->setNascimento($dado['nascimento']);
        $object->setCidade($dado['cidade']);
        $object->setEmail($dado['email']);
        $arr[] = $object;
      }
      return $arr;
    }
  }
  //mvc model view controler
  //factory
  public function showUpdate($id){
    $connection = new Connection();
    $dados = $connection->queryRid($id);
    
      $this->setId($dados['id']);
      $this->setNome($dados['nome']);
      $this->setSobrenome($dados['sobrenome']);
      $this->setNascimento($dados['nascimento']);
      $this->setCidade($dados['cidade']);
      $this->setEmail($dados['email']);
  }
  public function delete($id){
    $connection = new Connection();
    $connection->queryD($id);
  }

  // Métodos
  public function getId(){
    return $this->id;
  }
  public function setId($i){
    $this->id = $i;
  }
  public function getNome(){
    return $this->nome;
  }
  public function setNome($n){
    $this->nome = $n;
  }
  public function getSobrenome(){
    return $this->sobrenome;
  }
  public function setSobrenome($s){
    $this->sobrenome = $s;
  }
  public function getNascimento(){
    // $date = new DateTime($this->nascimento);
    // return $date->format('d-m-Y');
    return $this->nascimento;
  }
  public function getNewNascimento(){
    $date = new DateTime($this->nascimento);
    return $date->format('d-m-Y');
    // return $this->nascimento;
  }
  public function setNascimento($n){
    $this->nascimento = $n;
  }
  public function getCidade(){
    return $this->cidade;
  }
  public function setCidade($c){
    $this->cidade = $c;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setEmail($e){
    $this->email = $e;
  }
}
?>