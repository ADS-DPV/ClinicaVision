<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Paciente
 *
 * @author pedro
 */
class Funcionario {

  
    private $NomeFuncionario;
    private $IdFuncionario;
    private $emailFuncionario;
    private $telFuncionario;
    private $endereco;
    private $tipoFuncionario;
    private $crmMedico;
    private $cpf;
    private $especialidade;
    
    function getNomeFuncionario() {
        return $this->NomeFuncionario;
    }

    function getIdFuncionario() {
        return $this->IdFuncionario;
    }

    function getEmailFuncionario() {
        return $this->emailFuncionario;
    }

    function getTelFuncionario() {
        return $this->telFuncionario;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getTipoFuncionario() {
        return $this->tipoFuncionario;
    }

    function getCrmMedico() {
        return $this->crmMedico;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEspecialidade() {
        return $this->especialidade;
    }

    function setNomeFuncionario($NomeFuncionario) {
        $this->NomeFuncionario = $NomeFuncionario;
    }

    function setIdFuncionario($IdFuncionario) {
        $this->IdFuncionario = $IdFuncionario;
    }

    function setEmailFuncionario($emailFuncionario) {
        $this->emailFuncionario = $emailFuncionario;
    }

    function setTelFuncionario($telFuncionario) {
        $this->telFuncionario = $telFuncionario;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setTipoFuncionario($tipoFuncionario) {
        $this->tipoFuncionario = $tipoFuncionario;
    }

    function setCrmMedico($crmMedico) {
        $this->crmMedico = $crmMedico;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }



}
