<?php

include_once '../config/Conexao.php';
include_once  '../Model/DAO.php';

    
$paciente = new Paciente();
$funcionario = new Funcionario();




$paciente->setIdPaciente($_POST['idPaciente']);
$paciente->setNome($_POST['nome']);
$paciente->setEmail($_POST['email']);
$paciente->setTelefone($_POST['telefone']);
$paciente->setPlano($_POST['plano']);
$paciente->setObservacao($_POST['obs']);
$paciente->setDataNascimento($_POST['dataNascimento']);


$dao = new DAO();
$dao->editaPaciente($paciente->getIdPaciente(), $paciente->getNome(), $paciente->getEmail(), $paciente->getTelefone(), $paciente->getPlano(),
        $paciente->getObservacao(), $paciente->getDataNascimento());
if ($dao) {
        echo "<script>alert('Dados editados com sucesso.');</script>";
    
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../Relatorio.php'\">";
} else {
    echo "<script>alert('Erro...');</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../View/Relatorio.php'\">";
}

