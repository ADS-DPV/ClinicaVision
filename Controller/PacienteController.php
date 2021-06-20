<?php

include_once '../config/Conexao.php';
include_once  '../Model/DAO.php';

    
$paciente = new Paciente();
$paciente->setNome($_POST['nome']);
$paciente->setEmail($_POST['email']);
$paciente->setTelefone($_POST['telefone']);
$paciente->setPlano($_POST['plano']);
$paciente->setObservacao($_POST['obs']);
$paciente->setDataNascimento($_POST['dataNascimento']);


$dao = new DAO();
$dao->cadastraPaciente($paciente->getNome(), $paciente->getEmail(), $paciente->getTelefone(), $paciente->getPlano(),
        $paciente->getObservacao(), $paciente->getDataNascimento());
if ($dao) {
        echo "<script>alert('Paciente cadastrado com sucesso.');</script>";
    
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../RelatorioPaciente.php'\">";
} else {
    echo "<script>alert('Erro...');</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../View/RelatorioPaciente.php'\">";
}

