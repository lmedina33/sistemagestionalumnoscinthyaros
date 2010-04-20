<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Representante
 *
 * @author gerardobarcia
 */
class Representante {
    private $cedula;

    private $nombres;

    private $apellidos;

    private $edoCivil;

    private $fechaNacimiento;

    private $direccion;

    private $telefono1;

    private $telefono2;

    private $telefono3;

    private $gradoInstruccion;

    private $trabaja;

    private $descripcionTrabajo;

    private $telefonoTrabajo1;

    private $telefonoTrabajo2;

    private $listaParentescoRepresentante;

    function __construct() {
    }

    public function getListaParentescoRepresentante() {
        return $this->listaParentescoRepresentante;
    }

    public function setListaParentescoRepresentante($listaParentescoRepresentante) {
        $this->listaParentescoRepresentante = $listaParentescoRepresentante;
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

    public function getEdoCivil() {
        return $this->edoCivil;
    }

    public function setEdoCivil($edoCivil) {
        $this->edoCivil = $edoCivil;
    }

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
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

    public function getGradoInstruccion() {
        return $this->gradoInstruccion;
    }

    public function setGradoInstruccion($gradoInstruccion) {
        $this->gradoInstruccion = $gradoInstruccion;
    }

    public function getTrabaja() {
        return $this->trabaja;
    }

    public function setTrabaja($trabaja) {
        $this->trabaja = $trabaja;
    }

    public function getDescripcionTrabajo() {
        return $this->descripcionTrabajo;
    }

    public function setDescripcionTrabajo($descripcionTrabajo) {
        $this->descripcionTrabajo = $descripcionTrabajo;
    }

    public function getTelefonoTrabajo1() {
        return $this->telefonoTrabajo1;
    }

    public function setTelefonoTrabajo1($telefonoTrabajo1) {
        $this->telefonoTrabajo1 = $telefonoTrabajo1;
    }

    public function getTelefonoTrabajo2() {
        return $this->telefonoTrabajo2;
    }

    public function setTelefonoTrabajo2($telefonoTrabajo2) {
        $this->telefonoTrabajo2 = $telefonoTrabajo2;
    }

}
?>
