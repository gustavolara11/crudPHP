<?php 

require_once 'user.php';

if(isset($_GET['del'])){
  $user = new User;
  $id = $_GET['del'];
  $user->delete($id);

}elseif(!empty($_GET['id'])){
  $object = new User;
  $object->setId($_GET['id']);
  $object->setNome($_GET['nome']);
  $object->setSobrenome($_GET['sobrenome']);
  $object->setNascimento($_GET['nascimento']);
  $object->setCidade($_GET['cidade']);
  $object->setEmail($_GET['email']);

  $object->save($object->getId(), $object->getNome(), $object->getSobrenome(), $object->getNascimento(), $object->getCidade(), $object->getEmail());

  // $connection = new Connection;
  // $connection->queryU($_GET['id'], $_GET['nome'], $_GET['sobrenome'], $_GET['nascimento'], $_GET['cidade'], $_GET['email']);
}else{
$object = new User;

$object->setNome($_GET['nome']);
$object->setSobrenome($_GET['sobrenome']);
$object->setNascimento($_GET['nascimento']);
$object->setCidade($_GET['cidade']);
$object->setEmail($_GET['email']);

$object->save('', $object->getNome(), $object->getSobrenome(), $object->getNascimento(), $object->getCidade(), $object->getEmail());
}

?>