<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personal
 *
 * @author gerardobarcia
 */
class Personal {
    private $cedula;

    private $nombres;

    private $apellidos;

    private $fechaNac;

    private $sexo;

    private $estadoCivil;

    private $direccion;

    private $telefono1;

    private $telefono2;

    private $telefono3;

    private $cargo;

    private $codigo;

    private $funcion;

    private $turno;

    private $dependenciaMPPE;

    private $dependenciaEstadal;

    private $dependenciaOtros;

    private $fechaIngresoMinisterio;

    private $cein;

    private $otras;


    private $listaPeriodos;

    function __construct() {
    }

    public function getListaPeriodos() {
        return $this->listaPeriodos;
    }

    public function setListaPeriodos($listaPeriodos) {
        $this->listaPeriodos = $listaPeriodos;
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getFechaNac() {
        return $this->fechaNac;
    }

    public function setFechaNac($fechaNac) {
        $this->fechaNac = $fechaNac;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getEstadoCivil() {
        return $this->estadoCivil;
    }

    public function setEstadoCivil($estadoCivil) {
        $this->estadoCivil = $estadoCivil;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getTelefono1() {
        return $this->telefono1;
    }

    public function setTelefono1($telefono1) {
        $this->telefono1 = $telefono1;
    }

    public function getTelefono2() {
        return $this->telefono2;
    }

    public function setTelefono2($telefono2) {
        $this->telefono2 = $telefono2;
    }

    public function getTelefono3() {
        return $this->telefono3;
    }

    public function setTelefono3($telefono3) {
        $this->telefono3 = $telefono3;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getFuncion() {
        return $this->funcion;
    }

    public function setFuncion($funcion) {
        $this->funcion = $funcion;
    }

    public function getTurno() {
        return $this->turno;
    }

    public function setTurno($turno) {
        $this->turno = $turno;
    }

    public function getDependenciaMPPE() {
        return $this->dependenciaMPPE;
    }

    public function setDependenciaMPPE($dependenciaMPPE) {
        $this->dependenciaMPPE = $dependenciaMPPE;
    }

    public function getDependenciaEstadal() {
        return $this->dependenciaEstadal;
    }

    public function setDependenciaEstadal($dependenciaEstadal) {
        $this->dependenciaEstadal = $dependenciaEstadal;
    }

    public function getDependenciaOtros() {
        return $this->dependenciaOtros;
    }

    public function setDependenciaOtros($dependenciaOtros) {
        $this->dependenciaOtros = $dependenciaOtros;
    }

    public function getFechaIngresoMinisterio() {
        return $this->fechaIngresoMinisterio;
    }

    public function setFechaIngresoMinisterio($fechaIngresoMinisterio) {
        $this->fechaIngresoMinisterio = $fechaIngresoMinisterio;
    }

    public function getCein() {
        return $this->cein;
    }

    public function setCein($cein) {
        $this->cein = $cein;
    }

    public function getOtras() {
        return $this->otras;
    }

    public function setOtras($otras) {
        $this->otras = $otras;
    }

}
?>
