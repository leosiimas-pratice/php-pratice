<?php

require_once("config.php");

//Carrega Um Usuario
/* 
$users = new Usuario();
$users->loadByid(5);
echo $users; */

//Carrega Varios Usuarios
/* $lista = Usuario::getList();
echo json_encode($lista);
 */

 //Carra uma lista de usuario buscado pelo login
/* 
$search = Usuario::search("leonard");
echo json_encode($search); */

//Carrega um usuário usando o login e a senha
/* $user = new Usuario();
$user->login("Leo","poasd0");
echo $user; */

// Criando um novo o usuario
/* $aluno = new Usuario("aluno3","@aluno2");
$aluno->insert();
echo $aluno; */

//Atualiza um usuario
/* $user = new Usuario();
$user->loadByid(10);
$user->update("Leonardo", "123456");
echo $user; */

$user = new Usuario();
$user->loadByid(10);
$user->delete();
echo $user;

?>