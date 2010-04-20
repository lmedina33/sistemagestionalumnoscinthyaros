<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PersonaRetiro
 *
 * @author gerardobarcia
 */
class PersonaRetiro {
    private $cedula;

    private $nombres;

    private $apellidos;

    private $fechaNac;

    private $listaAlumnos;

    private $listaPersonaRetiroAlumno;

    function __construct() {
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

    public function getListaAlumnos() {
        return $this->listaAlumnos;
    }

    public function setListaAlumnos($listaAlumnos) {
        $this->listaAlumnos = $listaAlumnos;
    }
}
?>
