<?php

include_once '../config/Conexao.php';
include_once  '../Model/DAO.php';

$result = '';    
$paciente = new Paciente();
$paciente->setIdPaciente($_POST['idPaciente']);


 



$dao = new DAO();
$dao->excluiPaciente($paciente->getIdPaciente());
if ($dao) {
    echo "<script>alert('Usuário deletado com sucesso.');</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../RelatorioPaciente.php'\">";
    
       
} else {
    echo "<script>alert('Erro...');</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../RelatorioPaciente.php'\">";
    
}

 