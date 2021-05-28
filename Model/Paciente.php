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
class Paciente {

    function getIdPaciente() {
        return $this->IdPaciente;
    }

    function getNome() {
        return $this->Nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getPlano() {
        return $this->plano;
    }

    function getObservacao() {
        return $this->observacao;
    }

    function setIdPaciente($IdPaciente) {
        $this->IdPaciente = $IdPaciente;
    }

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setPlano($plano) {
        $this->plano = $plano;
    }

    function setObservacao($observacao) {
        $this->observacao = $observacao;
    }

    
    
    function getDataNascimento() {
        return $this->dataNascimento;
    }

    function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    private $Nome;
    private $IdPaciente;
    private $email;
    private $telefone;
    private $plano;
    private $observacao;
    private $dataNascimento;

}
