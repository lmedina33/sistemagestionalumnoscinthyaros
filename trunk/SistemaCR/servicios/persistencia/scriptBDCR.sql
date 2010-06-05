SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `sistemaGestionCynthiaRos` ;
CREATE SCHEMA IF NOT EXISTS `sistemaGestionCynthiaRos` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;
USE `sistemaGestionCynthiaRos` ;

-- -----------------------------------------------------
-- Table `sistemaGestionCynthiaRos`.`PERSONAL`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaGestionCynthiaRos`.`PERSONAL` ;

CREATE  TABLE IF NOT EXISTS `sistemaGestionCynthiaRos`.`PERSONAL` (
  `cedula` INT NOT NULL ,
  `nombres` VARCHAR(100) NOT NULL ,
  `apellidos` VARCHAR(100) NOT NULL ,
  `fechaNacimiento` DATE NOT NULL ,
  `sexo` VARCHAR(45) NOT NULL ,
  `estadoCivil` VARCHAR(45) NOT NULL ,
  `direccion` VARCHAR(255) NOT NULL ,
  `telefonoUno` VARCHAR(100) NOT NULL ,
  `telefonoDos` VARCHAR(100) NULL ,
  `telefonoTres` VARCHAR(100) NULL ,
  `cargo` VARCHAR(100) NOT NULL ,
  `codigo` VARCHAR(100) NOT NULL ,
  `funcion` VARCHAR(100) NOT NULL ,
  `turno` VARCHAR(45) NOT NULL ,
  `dependenciaMPPE` TINYINT(1)  NOT NULL ,
  `dependenciaEstada` TINYINT(1)  NOT NULL ,
  `dependenciaOtros` TINYINT(1)  NOT NULL ,
  `fechaIngresoMinis` DATE NOT NULL ,
  `cein` VARCHAR(100) NULL ,
  `otras` TEXT NULL ,
  PRIMARY KEY (`cedula`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaGestionCynthiaRos`.`ALUMNO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaGestionCynthiaRos`.`ALUMNO` ;

CREATE  TABLE IF NOT EXISTS `sistemaGestionCynthiaRos`.`ALUMNO` (
  `expediente` VARCHAR(255) NOT NULL COMMENT 'numero de expediente' ,
  `cedula` INT UNSIGNED NULL ,
  `nombres` VARCHAR(255) NOT NULL ,
  `apellidos` VARCHAR(255) NOT NULL ,
  `fechaNacimiento` DATE NOT NULL ,
  `lugarNacimiento` VARCHAR(100) NOT NULL ,
  `direccion` VARCHAR(255) NOT NULL ,
  `telefonoUno` VARCHAR(255) NOT NULL ,
  `telefonoDos` VARCHAR(255) NULL ,
  `telefonoTres` VARCHAR(255) NULL ,
  `procedePrescolar` TINYINT(1)  NOT NULL COMMENT 'marcado si procede de este preescolar' ,
  `procedeHogar` TINYINT(1)  NOT NULL COMMENT 'marcado si procede del hogar' ,
  `procedeOtro` TINYINT(1)  NOT NULL COMMENT 'marcado si procede otro lugar' ,
  `nombreProcedeOtro` VARCHAR(100) NULL ,
  `vivePapa` TINYINT(1)  NOT NULL ,
  `viveMama` TINYINT(1)  NOT NULL ,
  `viveHermano` TINYINT(1)  NOT NULL ,
  `viveHermana` TINYINT(1)  NOT NULL ,
  `viveAbuelo` TINYINT(1)  NOT NULL ,
  `viveAbuela` TINYINT(1)  NOT NULL ,
  `viveTio` TINYINT(1)  NOT NULL ,
  `viveTia` TINYINT(1)  NOT NULL ,
  `viveOtros` TINYINT(1)  NOT NULL ,
  `cuidaAlumno` VARCHAR(100) NULL COMMENT 'parentesco que cuida al alumno' ,
  `emergenciaLlamar` VARCHAR(100) NULL ,
  `telefonoEmergenciaUno` VARCHAR(100) NULL ,
  `telefonoEmergenciaDos` VARCHAR(100) NULL ,
  `emergenciaLLevar` VARCHAR(255) NOT NULL ,
  `fiebreAlta` VARCHAR(255) NOT NULL COMMENT 'medicamento a suministrar en caso de fiebre alta' ,
  `psicologo` TINYINT(1)  NOT NULL ,
  `psicopedagogo` TINYINT(1)  NOT NULL ,
  `neurologo` TINYINT(1)  NOT NULL ,
  `terapistaLeng` TINYINT(1)  NOT NULL ,
  `motivoMedico` VARCHAR(255) NOT NULL ,
  `clinicaMedico` VARCHAR(255) NOT NULL COMMENT 'clinica donde es llevado para tratamiento' ,
  `RecPartidaNac` TINYINT(1)  NOT NULL ,
  `RecConstVacuna` TINYINT(1)  NOT NULL ,
  `RecCedula` TINYINT(1)  NOT NULL ,
  `RecFotoRepresentante` TINYINT(1)  NOT NULL ,
  `RecFotoAlumno` TINYINT(1)  NOT NULL ,
  `RecOtros` VARCHAR(255) NOT NULL ,
  `foto` VARCHAR(255) NULL ,
  `asmatico` TINYINT(1)  NOT NULL ,
  `alergico` TINYINT(1)  NOT NULL ,
  `activo` TINYINT(1)  NOT NULL ,
  `tranquilo` TINYINT(1)  NOT NULL ,
  `sociable` TINYINT(1)  NOT NULL ,
  `timido` TINYINT(1)  NOT NULL ,
  `comunicativo` TINYINT(1)  NOT NULL ,
  `sexo` VARCHAR(45) NOT NULL ,
  `enfermedades` TEXT NULL ,
  `medicamentosAlergia` TEXT NULL ,
  PRIMARY KEY (`expediente`) ,
  UNIQUE INDEX `expediente_UNIQUE` (`expediente` ASC) ,
  UNIQUE INDEX `cedula_UNIQUE` (`cedula` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaGestionCynthiaRos`.`REPRESENTANTE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaGestionCynthiaRos`.`REPRESENTANTE` ;

CREATE  TABLE IF NOT EXISTS `sistemaGestionCynthiaRos`.`REPRESENTANTE` (
  `cedula` INT UNSIGNED NOT NULL ,
  `nombres` VARCHAR(100) NOT NULL ,
  `apellidos` VARCHAR(100) NOT NULL ,
  `estadoCivil` VARCHAR(45) NOT NULL ,
  `fechaNacimiento` DATE NOT NULL ,
  `direccion` VARCHAR(255) NOT NULL ,
  `telefonoUno` VARCHAR(100) NOT NULL ,
  `telefonoDos` VARCHAR(100) NULL ,
  `TelefonoTres` VARCHAR(100) NULL ,
  `GradoInstruccion` VARCHAR(100) NOT NULL ,
  `trabaja` TINYINT(1)  NOT NULL ,
  `descripcionTrabajo` VARCHAR(255) NULL ,
  `telefonoTrabajoUno` VARCHAR(100) NULL ,
  `TelefonoTrabajoDos` VARCHAR(100) NULL ,
  PRIMARY KEY (`cedula`) ,
  UNIQUE INDEX `cedula_UNIQUE` (`cedula` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaGestionCynthiaRos`.`PARENTESCO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaGestionCynthiaRos`.`PARENTESCO` ;

CREATE  TABLE IF NOT EXISTS `sistemaGestionCynthiaRos`.`PARENTESCO` (
  `ALUMNO_expediente` VARCHAR(255) NOT NULL ,
  `REPRESENTANTE_cedula` INT UNSIGNED NOT NULL ,
  `parentesco` VARCHAR(255) NOT NULL COMMENT 'Papa, mama, tio, etc' ,
  PRIMARY KEY (`ALUMNO_expediente`, `REPRESENTANTE_cedula`) ,
  INDEX `fk_ALUMNO_has_REPRESENTANTE_ALUMNO` (`ALUMNO_expediente` ASC) ,
  INDEX `fk_ALUMNO_has_REPRESENTANTE_REPRESENTANTE1` (`REPRESENTANTE_cedula` ASC) ,
  CONSTRAINT `fk_ALUMNO_has_REPRESENTANTE_ALUMNO`
    FOREIGN KEY (`ALUMNO_expediente` )
    REFERENCES `sistemaGestionCynthiaRos`.`ALUMNO` (`expediente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ALUMNO_has_REPRESENTANTE_REPRESENTANTE1`
    FOREIGN KEY (`REPRESENTANTE_cedula` )
    REFERENCES `sistemaGestionCynthiaRos`.`REPRESENTANTE` (`cedula` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaGestionCynthiaRos`.`VACUNA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaGestionCynthiaRos`.`VACUNA` ;

CREATE  TABLE IF NOT EXISTS `sistemaGestionCynthiaRos`.`VACUNA` (
  `id` INT NOT NULL ,
  `nombre` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaGestionCynthiaRos`.`ALUMNO_has_VACUNA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaGestionCynthiaRos`.`ALUMNO_has_VACUNA` ;

CREATE  TABLE IF NOT EXISTS `sistemaGestionCynthiaRos`.`ALUMNO_has_VACUNA` (
  `ALUMNO_expediente` VARCHAR(255) NOT NULL ,
  `VACUNA_id` INT NOT NULL ,
  PRIMARY KEY (`ALUMNO_expediente`, `VACUNA_id`) ,
  INDEX `fk_ALUMNO_has_VACUNA_ALUMNO1` (`ALUMNO_expediente` ASC) ,
  INDEX `fk_ALUMNO_has_VACUNA_VACUNA1` (`VACUNA_id` ASC) ,
  CONSTRAINT `fk_ALUMNO_has_VACUNA_ALUMNO1`
    FOREIGN KEY (`ALUMNO_expediente` )
    REFERENCES `sistemaGestionCynthiaRos`.`ALUMNO` (`expediente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ALUMNO_has_VACUNA_VACUNA1`
    FOREIGN KEY (`VACUNA_id` )
    REFERENCES `sistemaGestionCynthiaRos`.`VACUNA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaGestionCynthiaRos`.`PERSONARETIRO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaGestionCynthiaRos`.`PERSONARETIRO` ;

CREATE  TABLE IF NOT EXISTS `sistemaGestionCynthiaRos`.`PERSONARETIRO` (
  `cedula` INT NOT NULL ,
  `nombres` VARCHAR(100) NULL ,
  `apellidos` VARCHAR(100) NULL ,
  `fechaNac` DATE NULL ,
  PRIMARY KEY (`cedula`) ,
  UNIQUE INDEX `cedula_UNIQUE` (`cedula` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaGestionCynthiaRos`.`ALUMNO_has_PERSONARETIRO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaGestionCynthiaRos`.`ALUMNO_has_PERSONARETIRO` ;

CREATE  TABLE IF NOT EXISTS `sistemaGestionCynthiaRos`.`ALUMNO_has_PERSONARETIRO` (
  `ALUMNO_expediente` VARCHAR(255) NOT NULL ,
  `PERSONARETIRO_cedula` INT NOT NULL ,
  `parentesco` VARCHAR(45) NULL ,
  PRIMARY KEY (`ALUMNO_expediente`, `PERSONARETIRO_cedula`) ,
  INDEX `fk_ALUMNO_has_PERSONARETIRO_ALUMNO1` (`ALUMNO_expediente` ASC) ,
  INDEX `fk_ALUMNO_has_PERSONARETIRO_PERSONARETIRO1` (`PERSONARETIRO_cedula` ASC) ,
  CONSTRAINT `fk_ALUMNO_has_PERSONARETIRO_ALUMNO1`
    FOREIGN KEY (`ALUMNO_expediente` )
    REFERENCES `sistemaGestionCynthiaRos`.`ALUMNO` (`expediente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ALUMNO_has_PERSONARETIRO_PERSONARETIRO1`
    FOREIGN KEY (`PERSONARETIRO_cedula` )
    REFERENCES `sistemaGestionCynthiaRos`.`PERSONARETIRO` (`cedula` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaGestionCynthiaRos`.`TRANSPORTE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaGestionCynthiaRos`.`TRANSPORTE` ;

CREATE  TABLE IF NOT EXISTS `sistemaGestionCynthiaRos`.`TRANSPORTE` (
  `nombresConductor` VARCHAR(100) NOT NULL ,
  `cedulaConductor` INT NOT NULL ,
  `placa` VARCHAR(100) NOT NULL ,
  `apellidosConductor` VARCHAR(100) NULL ,
  `telefono` VARCHAR(100) NOT NULL ,
  `ruta` VARCHAR(200) NULL ,
  PRIMARY KEY (`cedulaConductor`, `placa`) ,
  UNIQUE INDEX `placa_UNIQUE` (`placa` ASC) ,
  UNIQUE INDEX `cedulaConductor_UNIQUE` (`cedulaConductor` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaGestionCynthiaRos`.`TRANSPORTE_has_ALUMNO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaGestionCynthiaRos`.`TRANSPORTE_has_ALUMNO` ;

CREATE  TABLE IF NOT EXISTS `sistemaGestionCynthiaRos`.`TRANSPORTE_has_ALUMNO` (
  `TRANSPORTE_cedulaConductor` INT NOT NULL ,
  `TRANSPORTE_placa` VARCHAR(100) NOT NULL ,
  `ALUMNO_expediente` VARCHAR(255) NOT NULL ,
  `fechaInicio` DATE NOT NULL ,
  `fechaFin` DATE NULL ,
  PRIMARY KEY (`TRANSPORTE_cedulaConductor`, `TRANSPORTE_placa`, `ALUMNO_expediente`) ,
  INDEX `fk_TRANSPORTE_has_ALUMNO_TRANSPORTE1` (`TRANSPORTE_cedulaConductor` ASC, `TRANSPORTE_placa` ASC) ,
  INDEX `fk_TRANSPORTE_has_ALUMNO_ALUMNO1` (`ALUMNO_expediente` ASC) ,
  CONSTRAINT `fk_TRANSPORTE_has_ALUMNO_TRANSPORTE1`
    FOREIGN KEY (`TRANSPORTE_cedulaConductor` , `TRANSPORTE_placa` )
    REFERENCES `sistemaGestionCynthiaRos`.`TRANSPORTE` (`cedulaConductor` , `placa` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TRANSPORTE_has_ALUMNO_ALUMNO1`
    FOREIGN KEY (`ALUMNO_expediente` )
    REFERENCES `sistemaGestionCynthiaRos`.`ALUMNO` (`expediente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaGestionCynthiaRos`.`GRUPO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaGestionCynthiaRos`.`GRUPO` ;

CREATE  TABLE IF NOT EXISTS `sistemaGestionCynthiaRos`.`GRUPO` (
  `id` INT NOT NULL ,
  `añoEscolar` INT NOT NULL ,
  `fechaInscripcion` DATE NOT NULL ,
  `grupo` VARCHAR(100) NULL ,
  `observaciones` TEXT NULL ,
  `ALUMNO_expediente` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`id`, `ALUMNO_expediente`) ,
  INDEX `fk_GRUPO_ALUMNO1` (`ALUMNO_expediente` ASC) ,
  CONSTRAINT `fk_GRUPO_ALUMNO1`
    FOREIGN KEY (`ALUMNO_expediente` )
    REFERENCES `sistemaGestionCynthiaRos`.`ALUMNO` (`expediente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaGestionCynthiaRos`.`PERIODO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaGestionCynthiaRos`.`PERIODO` ;

CREATE  TABLE IF NOT EXISTS `sistemaGestionCynthiaRos`.`PERIODO` (
  `id` INT NOT NULL ,
  `fechaInicio` DATE NOT NULL ,
  `fechaFin` DATE NULL ,
  `observaciones` TEXT NULL ,
  `seccion` VARCHAR(45) NOT NULL ,
  `ALUMNO_expediente` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`id`, `ALUMNO_expediente`) ,
  INDEX `fk_PERIODO_ALUMNO1` (`ALUMNO_expediente` ASC) ,
  CONSTRAINT `fk_PERIODO_ALUMNO1`
    FOREIGN KEY (`ALUMNO_expediente` )
    REFERENCES `sistemaGestionCynthiaRos`.`ALUMNO` (`expediente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaGestionCynthiaRos`.`PERSONAL`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaGestionCynthiaRos`.`PERSONAL` ;

CREATE  TABLE IF NOT EXISTS `sistemaGestionCynthiaRos`.`PERSONAL` (
  `cedula` INT NOT NULL ,
  `nombres` VARCHAR(100) NOT NULL ,
  `apellidos` VARCHAR(100) NOT NULL ,
  `fechaNacimiento` DATE NOT NULL ,
  `sexo` VARCHAR(45) NOT NULL ,
  `estadoCivil` VARCHAR(45) NOT NULL ,
  `direccion` VARCHAR(255) NOT NULL ,
  `telefonoUno` VARCHAR(100) NOT NULL ,
  `telefonoDos` VARCHAR(100) NULL ,
  `telefonoTres` VARCHAR(100) NULL ,
  `cargo` VARCHAR(100) NOT NULL ,
  `codigo` VARCHAR(100) NOT NULL ,
  `funcion` VARCHAR(100) NOT NULL ,
  `turno` VARCHAR(45) NOT NULL ,
  `dependenciaMPPE` TINYINT(1)  NOT NULL ,
  `dependenciaEstada` TINYINT(1)  NOT NULL ,
  `dependenciaOtros` TINYINT(1)  NOT NULL ,
  `fechaIngresoMinis` DATE NOT NULL ,
  `cein` VARCHAR(100) NULL ,
  `otras` TEXT NULL ,
  PRIMARY KEY (`cedula`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaGestionCynthiaRos`.`PERSONAL_has_PERIODO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaGestionCynthiaRos`.`PERSONAL_has_PERIODO` ;

CREATE  TABLE IF NOT EXISTS `sistemaGestionCynthiaRos`.`PERSONAL_has_PERIODO` (
  `PERSONAL_cedula` INT NOT NULL ,
  `PERIODO_id` INT NOT NULL ,
  `PERIODO_ALUMNO_expediente` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`PERSONAL_cedula`, `PERIODO_id`, `PERIODO_ALUMNO_expediente`) ,
  INDEX `fk_PERSONAL_has_PERIODO_PERSONAL1` (`PERSONAL_cedula` ASC) ,
  INDEX `fk_PERSONAL_has_PERIODO_PERIODO1` (`PERIODO_id` ASC, `PERIODO_ALUMNO_expediente` ASC) ,
  CONSTRAINT `fk_PERSONAL_has_PERIODO_PERSONAL1`
    FOREIGN KEY (`PERSONAL_cedula` )
    REFERENCES `sistemaGestionCynthiaRos`.`PERSONAL` (`cedula` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PERSONAL_has_PERIODO_PERIODO1`
    FOREIGN KEY (`PERIODO_id` , `PERIODO_ALUMNO_expediente` )
    REFERENCES `sistemaGestionCynthiaRos`.`PERIODO` (`id` , `ALUMNO_expediente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Data for table `sistemaGestionCynthiaRos`.`ALUMNO`
-- -----------------------------------------------------
SET AUTOCOMMIT=0;
USE `sistemaGestionCynthiaRos`;


INSERT INTO `sistemaGestionCynthiaRos`.`ALUMNO` (`expediente`, `cedula`, `nombres`, `apellidos`, `fechaNacimiento`, `lugarNacimiento`, `direccion`, `telefonoUno`, `telefonoDos`, `telefonoTres`, `procedePrescolar`, `procedeHogar`, `procedeOtro`, `nombreProcedeOtro`, `vivePapa`, `viveMama`, `viveHermano`, `viveHermana`, `viveAbuelo`, `viveAbuela`, `viveTio`, `viveTia`, `viveOtros`, `cuidaAlumno`, `emergenciaLlamar`, `telefonoEmergenciaUno`, `telefonoEmergenciaDos`, `emergenciaLLevar`, `fiebreAlta`, `psicologo`, `psicopedagogo`, `neurologo`, `terapistaLeng`, `motivoMedico`, `clinicaMedico`, `RecPartidaNac`, `RecConstVacuna`, `RecCedula`, `RecFotoRepresentante`, `RecFotoAlumno`, `RecOtros`, `foto`, `asmatico`, `alergico`, `activo`, `tranquilo`, `sociable`, `timido`, `comunicativo`, `sexo`, `enfermedades`, `medicamentosAlergia`) VALUES ('01017079793', '17079793', 'Gerardo José', 'Barcia Palacios', '09-01-1986', 'Caracas', 'La Urbina', '02122425202', '04127049825', NULL, 0, 1, 0, NULL, 1, 1, 1, 0, 0, 0, 0, 0, 0, 'Mama', 'Mama', '034234233', NULL, 'Avila', 'Atamel', 0, 0, 0, 1, 'No habla bien', 'Avila', 1, 1, 1, 0, 0, '0', NULL, 0, 1, 1, 0, 0, 1, 1, 'M', NULL, NULL);
INSERT INTO `sistemaGestionCynthiaRos`.`ALUMNO` (`expediente`, `cedula`, `nombres`, `apellidos`, `fechaNacimiento`, `lugarNacimiento`, `direccion`, `telefonoUno`, `telefonoDos`, `telefonoTres`, `procedePrescolar`, `procedeHogar`, `procedeOtro`, `nombreProcedeOtro`, `vivePapa`, `viveMama`, `viveHermano`, `viveHermana`, `viveAbuelo`, `viveAbuela`, `viveTio`, `viveTia`, `viveOtros`, `cuidaAlumno`, `emergenciaLlamar`, `telefonoEmergenciaUno`, `telefonoEmergenciaDos`, `emergenciaLLevar`, `fiebreAlta`, `psicologo`, `psicopedagogo`, `neurologo`, `terapistaLeng`, `motivoMedico`, `clinicaMedico`, `RecPartidaNac`, `RecConstVacuna`, `RecCedula`, `RecFotoRepresentante`, `RecFotoAlumno`, `RecOtros`, `foto`, `asmatico`, `alergico`, `activo`, `tranquilo`, `sociable`, `timido`, `comunicativo`, `sexo`, `enfermedades`, `medicamentosAlergia`) VALUES ('11020026027', '20026027', 'RAUL JOSÉ', 'BARCIA PALACIOS', '16-01-1990', 'CARACAS', 'LA URBINA', '02122435678', '04129987856', NULL, 1, 0, 0, NULL, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'PAPA', 'PAPA', '34234234', NULL, 'AVILA', 'ACETAMINOFEN', 1, 0, 0, 0, 'SOLITARIO', 'AVILA', 1, 1, 1, 0, 0, '0', NULL, 1, 0, 0, 1, 1, 0, 1, 'M', NULL, NULL);

COMMIT;

-- -----------------------------------------------------
-- Data for table `sistemaGestionCynthiaRos`.`REPRESENTANTE`
-- -----------------------------------------------------
SET AUTOCOMMIT=0;
USE `sistemaGestionCynthiaRos`;
INSERT INTO `sistemaGestionCynthiaRos`.`REPRESENTANTE` (`cedula`, `nombres`, `apellidos`, `estadoCivil`, `fechaNacimiento`, `direccion`, `telefonoUno`, `telefonoDos`, `TelefonoTres`, `GradoInstruccion`, `trabaja`, `descripcionTrabajo`, `telefonoTrabajoUno`, `TelefonoTrabajoDos`) VALUES ('123', 'PEDRO', 'PEREZ', 'CASADO', '30-01-1978', 'PETARE', '0212345631', NULL, NULL, 'BACHILLER', 1, 'SECRETARIO BANCO PROVINCIAL', '0212454543', NULL);
INSERT INTO `sistemaGestionCynthiaRos`.`REPRESENTANTE` (`cedula`, `nombres`, `apellidos`, `estadoCivil`, `fechaNacimiento`, `direccion`, `telefonoUno`, `telefonoDos`, `TelefonoTres`, `GradoInstruccion`, `trabaja`, `descripcionTrabajo`, `telefonoTrabajoUno`, `TelefonoTrabajoDos`) VALUES ('1234', 'MARIA', 'GOMEZ', 'CASADO', '25-02-1978', 'PETARE', '0212324333', NULL, NULL, 'BACHILLER', 0, NULL, NULL, NULL);

COMMIT;

-- -----------------------------------------------------
-- Data for table `sistemaGestionCynthiaRos`.`PARENTESCO`
-- -----------------------------------------------------
SET AUTOCOMMIT=0;
USE `sistemaGestionCynthiaRos`;
INSERT INTO `sistemaGestionCynthiaRos`.`PARENTESCO` (`ALUMNO_expediente`, `REPRESENTANTE_cedula`, `parentesco`) VALUES ('01017079793', '123', 'PAPA');
INSERT INTO `sistemaGestionCynthiaRos`.`PARENTESCO` (`ALUMNO_expediente`, `REPRESENTANTE_cedula`, `parentesco`) VALUES ('11020026027', '123', 'PAPA');
INSERT INTO `sistemaGestionCynthiaRos`.`PARENTESCO` (`ALUMNO_expediente`, `REPRESENTANTE_cedula`, `parentesco`) VALUES ('01017079793', '1234', 'MAMA');
INSERT INTO `sistemaGestionCynthiaRos`.`PARENTESCO` (`ALUMNO_expediente`, `REPRESENTANTE_cedula`, `parentesco`) VALUES ('11020026027', '1234', 'MAMA');

COMMIT;

-- -----------------------------------------------------
-- Data for table `sistemaGestionCynthiaRos`.`VACUNA`
-- -----------------------------------------------------
SET AUTOCOMMIT=0;
USE `sistemaGestionCynthiaRos`;
INSERT INTO `sistemaGestionCynthiaRos`.`VACUNA` (`id`, `nombre`) VALUES ('1', 'BGC');
INSERT INTO `sistemaGestionCynthiaRos`.`VACUNA` (`id`, `nombre`) VALUES ('2', 'POLIO');
INSERT INTO `sistemaGestionCynthiaRos`.`VACUNA` (`id`, `nombre`) VALUES ('3', 'TRIPLE');
INSERT INTO `sistemaGestionCynthiaRos`.`VACUNA` (`id`, `nombre`) VALUES ('4', 'ANTIVARIOLICA');
INSERT INTO `sistemaGestionCynthiaRos`.`VACUNA` (`id`, `nombre`) VALUES ('5', 'SARAMPIÓN');
INSERT INTO `sistemaGestionCynthiaRos`.`VACUNA` (`id`, `nombre`) VALUES ('6', 'RUBEOLA');
INSERT INTO `sistemaGestionCynthiaRos`.`VACUNA` (`id`, `nombre`) VALUES ('7', 'MENINGITIS');
INSERT INTO `sistemaGestionCynthiaRos`.`VACUNA` (`id`, `nombre`) VALUES ('8', 'HEPATITIS');
INSERT INTO `sistemaGestionCynthiaRos`.`VACUNA` (`id`, `nombre`) VALUES ('9', 'FIEBRE');
INSERT INTO `sistemaGestionCynthiaRos`.`VACUNA` (`id`, `nombre`) VALUES ('10', 'FIEBRE AMARILLA');
INSERT INTO `sistemaGestionCynthiaRos`.`VACUNA` (`id`, `nombre`) VALUES ('11', 'LECHINA');

COMMIT;

-- -----------------------------------------------------
-- Data for table `sistemaGestionCynthiaRos`.`ALUMNO_has_VACUNA`
-- -----------------------------------------------------
SET AUTOCOMMIT=0;
USE `sistemaGestionCynthiaRos`;
INSERT INTO `sistemaGestionCynthiaRos`.`ALUMNO_has_VACUNA` (`ALUMNO_expediente`, `VACUNA_id`) VALUES ('11020026027', '2');
INSERT INTO `sistemaGestionCynthiaRos`.`ALUMNO_has_VACUNA` (`ALUMNO_expediente`, `VACUNA_id`) VALUES ('11020026027', '1');
INSERT INTO `sistemaGestionCynthiaRos`.`ALUMNO_has_VACUNA` (`ALUMNO_expediente`, `VACUNA_id`) VALUES ('01017079793', '1');

COMMIT;

-- -----------------------------------------------------
-- Data for table `sistemaGestionCynthiaRos`.`PERSONARETIRO`
-- -----------------------------------------------------
SET AUTOCOMMIT=0;
USE `sistemaGestionCynthiaRos`;
INSERT INTO `sistemaGestionCynthiaRos`.`PERSONARETIRO` (`cedula`, `nombres`, `apellidos`, `fechaNac`) VALUES ('123', 'MARIA', 'PALACIOS', '30-05-1970');
INSERT INTO `sistemaGestionCynthiaRos`.`PERSONARETIRO` (`cedula`, `nombres`, `apellidos`, `fechaNac`) VALUES ('1234', 'JOSE', 'PARTE', '22-12-1968');

COMMIT;

-- -----------------------------------------------------
-- Data for table `sistemaGestionCynthiaRos`.`ALUMNO_has_PERSONARETIRO`
-- -----------------------------------------------------
SET AUTOCOMMIT=0;
USE `sistemaGestionCynthiaRos`;
INSERT INTO `sistemaGestionCynthiaRos`.`ALUMNO_has_PERSONARETIRO` (`ALUMNO_expediente`, `PERSONARETIRO_cedula`, `parentesco`) VALUES ('01017079793', '123', 'MAMA');
INSERT INTO `sistemaGestionCynthiaRos`.`ALUMNO_has_PERSONARETIRO` (`ALUMNO_expediente`, `PERSONARETIRO_cedula`, `parentesco`) VALUES ('11020026027', '1234', 'PAPA');

COMMIT;

-- -----------------------------------------------------
-- Data for table `sistemaGestionCynthiaRos`.`TRANSPORTE`
-- -----------------------------------------------------
SET AUTOCOMMIT=0;
USE `sistemaGestionCynthiaRos`;
INSERT INTO `sistemaGestionCynthiaRos`.`TRANSPORTE` (`nombresConductor`, `cedulaConductor`, `placa`, `apellidosConductor`, `telefono`, `ruta`) VALUES ('JUAN', '12345678', 'RAJ-34T', 'PEREZ', '0412783432', 'PETARE-GUARENAS, ASUNCION-PETARE');

COMMIT;

-- -----------------------------------------------------
-- Data for table `sistemaGestionCynthiaRos`.`TRANSPORTE_has_ALUMNO`
-- -----------------------------------------------------
SET AUTOCOMMIT=0;
USE `sistemaGestionCynthiaRos`;
INSERT INTO `sistemaGestionCynthiaRos`.`TRANSPORTE_has_ALUMNO` (`TRANSPORTE_cedulaConductor`, `TRANSPORTE_placa`, `ALUMNO_expediente`, `fechaInicio`, `fechaFin`) VALUES ('12345678', 'RAJ-34T', '01017079793', '01-01-2010', NULL);

COMMIT;

-- -----------------------------------------------------
-- Data for table `sistemaGestionCynthiaRos`.`GRUPO`
-- -----------------------------------------------------
SET AUTOCOMMIT=0;
USE `sistemaGestionCynthiaRos`;
INSERT INTO `sistemaGestionCynthiaRos`.`GRUPO` (`id`, `añoEscolar`, `fechaInscripcion`, `grupo`, `observaciones`, `ALUMNO_expediente`) VALUES ('1', '2010', '02-02-2010', 'PRIMER', NULL, '01017079793');
INSERT INTO `sistemaGestionCynthiaRos`.`GRUPO` (`id`, `añoEscolar`, `fechaInscripcion`, `grupo`, `observaciones`, `ALUMNO_expediente`) VALUES ('2', '2010', '03-02-210', 'SEGUNDO', NULL, '11020026027');

COMMIT;
