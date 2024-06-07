<?php 

require_once 'user.php';
require_once 'connection.php';

$object = new User;

$object->setNome($_GET['nome']);
$object->setSobrenome($_GET['sobrenome']);
$object->setNascimento($_GET['nascimento']);
$object->setCidade($_GET['cidade']);
$object->setEmail($_GET['email']);
$object->setOperacao('');

$object->save('', $object->getNome(), $object->getSobrenome(), $object->getNascimento(), $object->getCidade(), $object->getEmail(),$object->getOperacao());

?>