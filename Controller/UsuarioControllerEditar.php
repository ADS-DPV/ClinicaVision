<?php

include_once '../config/Conexao.php';
include_once '../Model/DAO.php';
include_once '../Model/Usuario.php';




$usuario = new Usuario();

$usuario->setIdUsuario($_POST['idUsuario']);
$usuario->setLogin($_POST['login']);
$usuario->setSenha($_POST['senha']);





$dao = new DAO();
$dao->editaUsuario($usuario->getIdUsuario(), $usuario->getLogin(), $usuario->getSenha());
if ($dao) {
    echo "<script>alert('Dados editados com sucesso.');</script>";

    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../RelatorioUsuario.php'\">";
} else {
    echo "<script>alert('Erro...');</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../RelatorioUsuario.php'\">";
}


 