<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ParentescoRepresentante
 *
 * @author gerardobarcia
 */
class ParentescoRepresentante {
    private $alumno;

    private $representante;

    private $parentesco;

    function __construct() {
    }

    public function getAlumno() {
        return $this->alumno;
    }

    public function setAlumno($alumno) {
        $this->alumno = $alumno;
    }

    public function getRepresentante() {
        return $this->representante;
    }

    public function setRepresentante($representante) {
        $this->representante = $representante;
    }

    public function getParentesco() {
        return $this->parentesco;
    }

    public function setParentesco($parentesco) {
        $this->parentesco = $parentesco;
    }

}
?>
