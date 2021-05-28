<?php

include_once '../config/Conexao.php';
include_once '../Model/DAO.php';
include_once '../Model/Funcionario.php';






$funcionario = new Funcionario();


$funcionario->setNomeFuncionario($_POST['nomeFuncionario']);
$funcionario->setTipoFuncionario($_POST['tipoFuncionario']);
$funcionario->setEspecialidade($_POST['especialidade']);
$funcionario->setCrmMedico($_POST['crmMedico']);
$funcionario->setTelFuncionario($_POST['telFuncionario']);
$funcionario->setEmailFuncionario($_POST['emailFuncionario']);
$funcionario->setEndereco($_POST['endereco']);
$funcionario->setCpf($_POST['cpf']);
        

        
        
       

$dao = new DAO();
$dao->cadastraFuncionario($funcionario->getNomeFuncionario(), $funcionario->getTipoFuncionario(), $funcionario->getEspecialidade(), $funcionario->getCrmMedico(), $funcionario->getTelFuncionario(), $funcionario->getEmailFuncionario(), $funcionario->getEndereco(), $funcionario->getCpf());
if ($dao) {
    echo "<script>alert('Funcionario cadastrado com sucesso.');</script>";

    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../RelatorioFuncionario.php'\">";
} else {
    echo "<script>alert('Erro...');</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../RelatorioFuncionario.php'\">";
}

