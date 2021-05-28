<?php

include_once '../config/Conexao.php';
include_once '../Model/DAO.php';
include_once '../Model/consulta.php';




//INSTANCIANDO
$consulta = new consulta();




//PASSANDO 
$consulta->setIdConsulta($_POST['idConsulta']);
$consulta->setDataConuslta($_POST['datanascimento']);
$consulta->setTipo($_POST['tipoConsulta']);  
$consulta->setEspecialidade($_POST['especialidade']);
$consulta->setObsconsulta($_POST['obsConsulta']);



        
        
//INTANCIANDO A PAGINA 
$dao = new DAO();


//chamando metodo da DAO
$dao->editaConsulta($consulta->getIdConsulta() ,$consulta->getDataConuslta(), $consulta->getTipo(), $consulta->getEspecialidade(), $consulta->getObsconsulta(), $consulta->getIdpaciente(), $consulta->getIdfuncionario());
if ($dao) {
    echo "<script>alert('Consulta editada com sucesso.');</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../RelatorioUsuario.php'\">";
    
} else {
    echo "<script>alert('Erro...');</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
	  URL='../../RelatorioUsuario.php'\">";
}

