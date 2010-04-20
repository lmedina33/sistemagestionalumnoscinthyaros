<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Grupo
 *
 * @author gerardobarcia
 */
class Grupo {
    private $id;

    private $añoEscolar;

    private $fechaInscripcion;

    private $grupo;

    private $observaciones;

    function __construct() {
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getAñoEscolar() {
        return $this->añoEscolar;
    }

    public function setAñoEscolar($añoEscolar) {
        $this->añoEscolar = $añoEscolar;
    }

    public function getFechaInscripcion() {
        return $this->fechaInscripcion;
    }

    public function setFechaInscripcion($fechaInscripcion) {
        $this->fechaInscripcion = $fechaInscripcion;
    }

    public function getGrupo() {
        return $this->grupo;
    }

    public function setGrupo($grupo) {
        $this->grupo = $grupo;
    }

    public function getObservaciones() {
        return $this->observaciones;
    }

    public function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;
    }

}
?>
