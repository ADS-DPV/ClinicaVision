<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of consulta
 *
 * @author pedro
 */
class consulta {
    
  private $idConsulta;
  private $dataConuslta;
  private $tipo;
  private $especialidade;
  private $obsconsulta;
  private $Idpaciente;
  private $Idfuncionario;
  
  
  function getIdConsulta() {
      return $this->idConsulta;
  }

  function getDataConuslta() {
      return $this->dataConuslta;
  }

  function getTipo() {
      return $this->tipo;
  }

  function getEspecialidade() {
      return $this->especialidade;
  }

  function getObsconsulta() {
      return $this->obsconsulta;
  }

  function getIdpaciente() {
      return $this->Idpaciente;
  }

  function getIdfuncionario() {
      return $this->Idfuncionario;
  }

  function setIdConsulta($idConsulta) {
      $this->idConsulta = $idConsulta;
  }

  function setDataConuslta($dataConuslta) {
      $this->dataConuslta = $dataConuslta;
  }

  function setTipo($tipo) {
      $this->tipo = $tipo;
  }

  function setEspecialidade($especialidade) {
      $this->especialidade = $especialidade;
  }

  function setObsconsulta($obsconsulta) {
      $this->obsconsulta = $obsconsulta;
  }

  function setIdpaciente($Idpaciente) {
      $this->Idpaciente = $Idpaciente;
  }

  function setIdfuncionario($Idfuncionario) {
      $this->Idfuncionario = $Idfuncionario;
  }


}
