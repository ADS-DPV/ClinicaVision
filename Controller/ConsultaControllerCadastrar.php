<?php

include_once '../config/Conexao.php';
include_once '../Model/DAO.php';
include_once '../Model/consulta.php';




//INSTANCIANDO
$consulta = new consulta();




//PASSANDO 
$consulta->setDataConuslta($_POST['datanascimento']);
$consulta->setTipo($_POST['tipoConsulta']);  
$consulta->setEspecialidade($_POST['especialidade']);
$consulta->setObsconsulta($_POST['obsConsulta']);
$consulta->setIdpaciente($_POST['idPaciente']);
$consulta->setIdfuncionario($_POST['idFuncionario']);


        
        
//INTANCIANDO A PAGINA 
$dao = new DAO();


//chamando metodo da DAO
$dao->cadastraConsulta($consulta->getDataConuslta(), $consulta->getTipo(), $consulta->getEspecialidade(), $consulta->getObsconsulta(), $consulta->getIdpaciente(), $consulta->getIdfuncionario());
if ($dao) {
    echo "<script>alert('Consulta cadastrado com sucesso.');</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../RelatorioConsulta.php'\">";
    
} else {
    echo "<script>alert('Erro...');</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../RelatorioConsulta.php'\">";
}

