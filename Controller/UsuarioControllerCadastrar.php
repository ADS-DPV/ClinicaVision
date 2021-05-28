<?php

include_once '../config/Conexao.php';
include_once '../Model/DAO.php';
include_once '../Model/Usuario.php';





//INSTANCIANDO
$usuario = new Usuario();

//PASSANDO 
$usuario->setLogin($_POST['login']);
$usuario->setSenha($_POST['senha']);
$usuario->setIdFuncionario($_POST['idFuncionario']);



        
        
//INTANCIANDO A PAGINA 
$dao = new DAO();


//chamando metodo da DAO
$dao->cadastraUsuario($usuario->getLogin(), $usuario->getSenha(), $usuario->getIdFuncionario());
if ($dao) {
    echo "<script>alert('Usuario cadastrado com sucesso.');</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../RelatorioUsuario.php'\">";
    
} else {
    echo "<script>alert('Erro...');</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../RelatorioUsuario.php'\">";
}

