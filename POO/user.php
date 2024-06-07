<?php
  
require_once 'Connection.php';

class User {
  protected $id;
  protected $nome;
  protected $sobrenome;
  protected $nascimento;
  protected $cidade;
  protected $email;
  protected $operacao;
  
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
    $data = $connection->queryR($id);
              while ($dados = mysqli_fetch_assoc($data)){
                $object = new User;
                $object->setId($dados['id']);
                $object->setNome($dados['nome']);
                $object->setSobrenome($dados['sobrenome']);
                $object->setNascimento($dados['nascimento']);
                $object->setCidade($dados['cidade']);
                $object->setEmail($dados['email']);

                echo "<tr>
                      <td>".$object->getNome()."</td>
                      <td>".$object->getSobrenome()."</td>
                      <td>".$object->getNascimento()."</td>
                      <td>".$object->getCidade()."</td>
                      <td>".$object->getEmail()."</td>
                      <td><a href='update.php?id=".$object->getId()."'>Editar</a> / <a href='delete.php?id=".$object->getId()."'>Deletar</a></td>
                    </tr>";
                }
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
  public function getOperacao(){
    return $this->operacao;
  }
  public function setOperacao($o){
    $this->operacao = $o;
  }
}
?>