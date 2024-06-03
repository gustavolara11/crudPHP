<?php
  
  use Connection;

class User {
  protected $id;
  protected $nome;
  protected $sobrenome;
  protected $nascimento;
  protected $cidade;
  protected $email;
  protected $operacao;
  
  public function __construct($id = false){
    if($id){
      $connection = new Connection();
      $data = $connection->queryR($id);
        $this->id = $data['id'];
        $this->nome = $data['nome'];
        $this->sobrenome = $data['sobrenome'];
        $this->nascimento = $data['nascimento'];
        $this->cidade = $data['cidade'];
        $this->email = $data['email'];
        $this->operacao = $data['operacao'];
    }
  }
  public function save($id, $nome, $sobrenome, $nascimento, $cidade, $email, $operacao){
    $connection = new Connection();
    if($operacao == 'u'){
      $connection->queryU($id, $nome, $sobrenome, $nascimento, $cidade, $email);
    }else{
      $connection->queryC($nome, $sobrenome, $nascimento, $cidade, $email);
    }
  }
  public function load($id){
    $connection = new Connection();
    $connection->queryR($id);
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
    $id = $this->$i;
  }
  public function getNome(){
    return $this->nome;
  }
  public function setNome($n){
    $nome = $this->$n;
  }
  public function getSobrenome(){
    return $this->sobrenome;
  }
  public function setSobrenome($s){
    $sobrenome = $this->$s;
  }
  public function getNascimento(){
    $date = new DateTime($this->nascimento);
    return $date->format('d-m-Y'); 
  }
  public function setNascimento($n){
    $nascimento = $this->$n;
  }
  public function getCidade(){
    return $this->cidade;
  }
  public function setCidade($c){
    $cidade = $this->$c;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setEmail($e){
    $email = $this->$e;
  }
  public function getOperacao(){
    return $this->operacao;
  }
  public function setOperacao($o){
    $operacao = $this->$o;
  }
}
?>