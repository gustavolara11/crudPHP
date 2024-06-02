<?php
  
  use Connection;

class User {
  protected $nome;
  protected $sobrenome;
  protected $nascimento;
  protected $cidade;
  protected $email;
  
  public function __construct($id = false){
    if($id){
      $connection = new Connection();
      
      
    }

  }
  public function save(){
    $connection = new Connection();
   
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
    return $this->nascimento;
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
}


?>