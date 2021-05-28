<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author pedro
 */
class Usuario {
    
    private $idUsuario;
    private $login;
    private $senha;
    private $idFuncionario;
    private $nomeFuncionario;
    
    
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getIdFuncionario() {
        return $this->idFuncionario;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setIdFuncionario($idFuncionario) {
        $this->idFuncionario = $idFuncionario;
    }

    
    
    
     function getnomeFuncionario() {
        return $this->idnomeFuncionario;
    }

    function setnomeFuncionario($nomeFuncionario) {
        $this->nomeFuncionario = $nomeFuncionario;
    }
    
}
