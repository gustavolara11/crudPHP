<?php 

use User;

$object = new User;

$object->setNome($GET_['nome']);
$object->setSobrenome($GET_['sobrenome']);
$object->setNascimento($GET_['nascimento']);
$object->setCidade($GET_['cidade']);
$object->setEmail($GET_['email']);

$connection->save($object);

?>