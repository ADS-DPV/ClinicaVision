<?php

include_once '../config/Conexao.php';
include_once  '../Model/DAO.php';
include_once '../Model/consulta.php';




$consulta = new consulta();

$consulta->setIdConsulta($_POST['idConsulta']);






 



$dao = new DAO();
$dao->excluiConsulta($consulta->getIdConsulta());
if ($dao) {
    echo "<script>alert('Usuário deletado com sucesso.');</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../RelatorioUsuario.php'\">";
    
       
} else {
    echo "<script>alert('Erro...');</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../RelatorioUsuario.php'\">";
    
}

 