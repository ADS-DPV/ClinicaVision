-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema dbclinica
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema dbclinica
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dbclinica` DEFAULT CHARACTER SET utf8 ;
USE `dbclinica` ;

-- -----------------------------------------------------
-- Table `dbclinica`.`Funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbclinica`.`Funcionario` (
  `idfuncionario` INT(12) NOT NULL AUTO_INCREMENT,
  `nomeFuncionario` VARCHAR(50) NULL,
  `TipoFuncionario` VARCHAR(50) NULL,
  `especialidade` VARCHAR(50) NULL,
  `crmMedico` VARCHAR(45) NULL,
  `TelFuncionario` VARCHAR(45) NULL,
  `emailFuncionario` VARCHAR(45) NULL,
  `endereco` VARCHAR(45) NULL,
  `cpf` INT(14) NULL,
  PRIMARY KEY (`idfuncionario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbclinica`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbclinica`.`usuario` (
  `idUsuario` INT(12) NULL AUTO_INCREMENT,
  `login` VARCHAR(50) NULL,
  `senha` VARCHAR(15) NULL,
  `tbFuncionario_idfuncionario` INT(12) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  INDEX `fk_tbusuario_tbFuncionario1_idx` (`tbFuncionario_idfuncionario` ASC),
  CONSTRAINT `fk_tbusuario_tbFuncionario1`
    FOREIGN KEY (`tbFuncionario_idfuncionario`)
    REFERENCES `dbclinica`.`Funcionario` (`idfuncionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbclinica`.`paciente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbclinica`.`paciente` (
  `idPaciente` INT(12) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NULL,
  `email` VARCHAR(45) NULL,
  `telefone` VARCHAR(45) NULL,
  `plano` VARCHAR(45) NULL,
  `observacao` VARCHAR(100) NULL,
  `dataNascimento` DATE NULL,
  PRIMARY KEY (`idPaciente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbclinica`.`consulta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbclinica`.`consulta` (
  `idConsulta` INT(12) NOT NULL AUTO_INCREMENT,
  `dataConsulta` DATE NULL,
  `tipoConsulta` VARCHAR(45) NULL,
  `especialidadeConsulta` VARCHAR(50) NULL,
  `obsConsulta` VARCHAR(100) NULL,
  `tbpaciente_idpaciente` INT(12) NOT NULL,
  `tbFuncionario_idfuncionario` INT(12) NOT NULL,
  PRIMARY KEY (`idConsulta`),
  INDEX `fk_tbconsulta_tbpaciente1_idx` (`tbpaciente_idpaciente` ASC),
  INDEX `fk_tbconsulta_tbFuncionario1_idx` (`tbFuncionario_idfuncionario` ASC),
  CONSTRAINT `fk_tbconsulta_tbpaciente1`
    FOREIGN KEY (`tbpaciente_idpaciente`)
    REFERENCES `dbclinica`.`paciente` (`idPaciente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbconsulta_tbFuncionario1`
    FOREIGN KEY (`tbFuncionario_idfuncionario`)
    REFERENCES `dbclinica`.`Funcionario` (`idfuncionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
