<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../config/Conexao.php';
include_once 'Paciente.php';
include_once 'Funcionario.php';

/**
 * Description of DAO
 *
 * @author pedro
 */
class DAO {
    
    //************************** CRUD DE PACIENTE *********************************************

    public function cadastraPaciente($nome, $email, $telefone, $plano, $observacao, $dataNascimento) {
        //INSTANCIA E ABRE CONEXÃO COM O BANCO
        $conecta = new Conexaos();
        $pdo = $conecta->conecta();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf-8'");

        // Inserção no banco
        try {
            $pdoStatement = $pdo->prepare("insert into paciente values ('', '$nome', '$email', '$telefone', '$plano', '$observacao', '$dataNascimento')");
            $pdoStatement->execute();
            $result = "1";
            return $result;
        } catch (Exception $ex) {
            //Execção caso se encontre erro na inserção
            $result = "ERRO:" . $ex->getMessage();
            echo "<script>alert('Usuário cadastrado com sucesso.');</script>";
            return $result;
        }
        $pdo = null;
    }

    public function pesquisaPaciente() {
        //INSTANCIA E ABRE CONEXÃO COM O BANCO
        $conecta = new Conexaos();
        $pdo = $conecta->conecta();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf-8'");

        try {
        //PESQUISA OS DADOS DO BANCO    
            $sql = "SELECT * FROM paciente";
            $result = $pdo->query($sql);
            return $result;
        } catch (Exception $ex) {
            //Execção caso se encontre erro na inserção
            $result = "ERRO:" . $ex->getMessage();
            return $result;
        }
        $pdo = null;
    }

    public function excluiPaciente($idPaciente) {
        //INSTANCIA E ABRE CONEXÃO COM O BANCO
        $conecta = new Conexaos();
        $pdo = $conecta->conecta();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf-8'");


        try {
        //DELETA OS DADOS DO BANCO
            $sql = "delete from paciente where idPaciente = '$idPaciente'";
            $result = $pdo->prepare($sql);
            $result->execute();
            $result = "1";
        } catch (Exception $ex) {
            //Execção caso se encontre erro na inserção
            $result = "ERRO:" . $ex->getMessage();
            echo $ex->getMessage();
            return $result;
        }
    }

    public function editaPaciente($idPaciente, $nome, $email, $telefone, $plano, $observacao, $dataNascimento) {
        //INSTANCIA E ABRE CONEXÃO COM O BANCO
        $conecta = new Conexaos();
        $pdo = $conecta->conecta();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf-8'");

        // Inserção no banco
        try {
            $pdoStatement = $pdo->prepare("update paciente set nome = '$nome', email =  '$email', telefone = '$telefone', plano = '$plano', observacao = '$observacao', dataNascimento = '$dataNascimento' where idPaciente = '$idPaciente'");
            $pdoStatement->execute();
            $result = "1";
            return $result;
        } catch (Exception $ex) {
            //Execção caso se encontre erro na inserção
            $result = "ERRO:" . $ex->getMessage();
            echo "<script>alert('Dados Editado com sucesso.');</script>";
            return $result;
        }
        $pdo = null;
    }

   
    //************************** CRUD DE FUNCIONARIO *********************************************
    
    public function cadastraFuncionario($nome, $tipo, $especialidade, $crm, $telefone, $email, $endereco, $cpf) {
        //INSTANCIA E ABRE CONEXÃO COM O BANCO
        $conecta = new Conexaos();
        $pdo = $conecta->conecta();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf-8'");

        // Inserção no banco
        try {
            $pdoStatement = $pdo->prepare("insert into funcionario values ('', '$nome', '$tipo', '$especialidade', '$crm', '$telefone', '$email', '$endereco', '$cpf')");
            $pdoStatement->execute();
            $result = "1";
            return $result;
        } catch (Exception $ex) {
            //Execção caso se encontre erro na inserção
            $result = "ERRO:" . $ex->getMessage();
            echo "<script>alert('Usuário cadastrado com sucesso.');</script>";
            return $result;
        }
        $pdo = null;
    }

    public function pesquisaFuncionario() {
        //INSTANCIA E ABRE CONEXÃO COM O BANCO

        $conecta = new Conexaos();
        $pdo = $conecta->conecta();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf-8'");

        try {
        //PESQUISA DADOS NO BANCO    
            $sql = "SELECT * FROM funcionario";
            $result = $pdo->query($sql);
            return $result;
        } catch (Exception $ex) {
            //Execção caso se encontre erro na inserção
            $result = "ERRO:" . $ex->getMessage();
            return $result;
        }
        $pdo = null;
    }

    public function excluiFuncionario($idFuncionario) {
        //INSTANCIA E ABRE CONEXÃO COM O BANCO
        $conecta = new Conexaos();
        $pdo = $conecta->conecta();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf-8'");


        try {
        //DELETA OS DADOS DO BANCO    
            $sql = "delete from funcionario where idFuncionario = '$idFuncionario'";
            $result = $pdo->prepare($sql);
            $result->execute();
            $result = "1";
        } catch (Exception $ex) {
            //Execção caso se encontre erro na inserção
            $result = "ERRO:" . $ex->getMessage();
            echo $ex->getMessage();
            return $result;
        }
    }

    public function editaFuncionario($idFuncionario, $nome, $tipo, $especialidade, $crm, $telefone, $email, $endereco, $cpf) {
        //INSTANCIA E ABRE CONEXÃO COM O BANCO
        $conecta = new Conexaos();
        $pdo = $conecta->conecta();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf-8'");

        // Inserção no banco
        try {
            $pdoStatement = $pdo->prepare("update funcionario set nomeFuncionario = '$nome', TipoFuncionario = '$tipo', especialidade = '$especialidade', crmMedico = '$crm', TelFuncionario = '$telefone', emailFuncionario = '$email', endereco = '$endereco', cpf = '$cpf'  where idfuncionario = '$idFuncionario'");
            $pdoStatement->execute();
            $result = "1";
            return $result;
        } catch (Exception $ex) {
            //Execção caso se encontre erro na inserção
            $result = "ERRO:" . $ex->getMessage();
            echo "<script>alert('Dados Editado com sucesso.');</script>";
            return $result;
        }
        $pdo = null;
    }

   
    //************************** CRUD DE USUARIO *********************************************
    
    public function cadastraUsuario($login, $senha, $idFuncionario) {
        //INSTANCIA E ABRE CONEXÃO COM O BANCO
        $conecta = new Conexaos();
        $pdo = $conecta->conecta();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf-8'");

        // Inserção no banco
        try {
            $pdoStatement = $pdo->prepare("insert into usuario values ('','$login', '$senha', '$idFuncionario')");
            $pdoStatement->execute();
            $result = "1";
            return $result;
        } catch (Exception $ex) {
            //Execção caso se encontre erro na inserção
            $teste = $idFuncionario;
            $result = "ERRO:" . $ex->getMessage();
            echo "<script>alert('$teste');</script>";
            return $result;
        }
        $pdo = null;
    }

    public function pesquisaUsuario() {
        //INSTANCIA E ABRE CONEXÃO COM O BANCO
        $conecta = new Conexaos();
        $pdo = $conecta->conecta();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf-8'");

        try {
        //PESQUISA NO BANCO    
            $sql = "SELECT * FROM usuario INNER JOIN funcionario on funcionario.idFuncionario = usuario.tbFuncionario_idfuncionario";
            $result = $pdo->query($sql);
            return $result;
        } catch (Exception $ex) {
            //Execção caso se encontre erro na inserção
            $result = "ERRO:" . $ex->getMessage();
            return $result;
        }
        $pdo = null;
    }

    public function excluiUsuario($idUsuario) {
        //INSTANCIA E ABRE CONEXÃO COM O BANCO
        $conecta = new Conexaos();
        $pdo = $conecta->conecta();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf-8'");


        try {
            
            $sql = "delete from usuario where idUsuario = '$idUsuario'";
            $result = $pdo->prepare($sql);
            $result->execute();
            $result = "1";
        } catch (Exception $ex) {
            //Execção caso se encontre erro na inserção
            $teste = $idUsuario;
            $result = "ERRO:" . $ex->getMessage();
            echo "<script>alert('$teste');</script>";
            return $result;
        }
    }

    public function editaUsuario($idUsuario, $login, $senha) {
        // Interação com o banco atraves de PDO
        $conecta = new Conexaos();
        $pdo = $conecta->conecta();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf-8'");

        // Inserção no banco
        try {
            $pdoStatement = $pdo->prepare("update usuario set login = '$login', senha = '$senha' where idUsuario = '$idUsuario'");
            $pdoStatement->execute();
            $result = "1";
            return $result;
        } catch (Exception $ex) {
            //Execção caso se encontre erro na inserção
            $teste = $login;
            $result = "ERRO:" . $ex->getMessage();
            echo "<script>alert('$result');</script>";
            return $result;
        }
        $pdo = null;
    }
    
    
    
    //************************** CRUD DE CONSULTA *********************************************

    public function cadastraConsulta($dataConuslta, $tipoConsulta, $especialidade, $obsConsulta, $idPaciente, $idFuncionario) {
        // Interação com o banco atraves de PDO
        $conecta = new Conexaos();
        $pdo = $conecta->conecta();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf-8'");

        // Inserção no banco
        try {
            $pdoStatement = $pdo->prepare("insert into consulta values ('','$dataConuslta', '$tipoConsulta', '$especialidade', '$obsConsulta', '$idPaciente', '$idFuncionario')");
            $pdoStatement->execute();
            $result = "1";
            return $result;
        } catch (Exception $ex) {
            //Execção caso se encontre erro na inserção
            $teste = $idFuncionario;
            $result = "ERRO:" . $ex->getMessage();
            echo "<script>alert('$teste');</script>";
            return $result;
        }
        $pdo = null;
    }

    public function pesquisaConsulta() {

        $conecta = new Conexaos();
        $pdo = $conecta->conecta();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf-8'");

        try {
            $sql = "SELECT * FROM consulta ";
            $result = $pdo->query($sql);
            return $result;
        } catch (Exception $ex) {
            //Execção caso se encontre erro na inserção
            $result = "ERRO:" . $ex->getMessage();
            return $result;
        }
        $pdo = null;
    }
    
    public function excluiConsulta($idConsulta) {
        $conecta = new Conexaos();
        $pdo = $conecta->conecta();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf-8'");


        try {
            $sql = "delete from consulta where idConsulta = '$idConsulta'";
            $result = $pdo->prepare($sql);
            $result->execute();
            $result = "1";
        } catch (Exception $ex) {
            //Execção caso se encontre erro na inserção
            $teste = $idUsuario;
            $result = "ERRO:" . $ex->getMessage();
            echo "<script>alert('$teste');</script>";
            return $result;
        }
    }

    public function editaConsulta($idConsulta, $dataConuslta, $tipoConsulta, $especialidade, $obsConsulta) {
        // Interação com o banco atraves de PDO
        $conecta = new Conexaos();
        $pdo = $conecta->conecta();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf-8'");

        // Inserção no banco
        try {
            $pdoStatement = $pdo->prepare("update consulta set dataConsulta = '$dataConuslta', tipoConsulta = '$tipoConsulta',"
                    . "especialidadeConsulta = '$especialidade', obsConsulta = '$obsConsulta' where idConsulta = $idConsulta ");
            $pdoStatement->execute();
            $result = "1";
            return $result;
        } catch (Exception $ex) {
            //Execção caso se encontre erro na inserção
            $teste = $login;
            $result = "ERRO:" . $ex->getMessage();
            echo "<script>alert('$result');</script>";
            return $result;
        }
        $pdo = null;
    }


}
