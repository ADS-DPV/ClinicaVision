<?php

include_once '../config/Conexao.php';
include_once  '../Model/DAO.php';
include_once '../Model/Usuario.php';




$usuario = new Usuario();


$usuario->setIdUsuario($_POST['idUsuario']);






 



$dao = new DAO();
$dao->excluiUsuario($usuario->getIdUsuario());
if ($dao) {
    echo "<script>alert('Usuário deletado com sucesso.');</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../RelatorioUsuario.php'\">";
    
       
} else {
    echo "<script>alert('Erro...');</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../RelatorioUsuario.php'\">";
    
}

 