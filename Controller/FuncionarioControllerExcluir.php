<?php

include_once '../config/Conexao.php';
include_once  '../Model/DAO.php';

$result = '';    
$funcionario = new Funcionario();
$funcionario->setIdFuncionario($_POST['idFuncionario']);


 



$dao = new DAO();
$dao->excluiFuncionario($funcionario->getIdFuncionario());
if ($dao) {
    echo "<script>alert('Funcionario deletado com sucesso.');</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../RelatorioFuncionario.php'\">";
    
       
} else {
    echo "<script>alert('Erro...');</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../RelatorioFuncionario.php'\">";
    
}

 