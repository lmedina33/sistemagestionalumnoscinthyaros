<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PersonaRetiroAlumno
 *
 * @author gerardobarcia
 */
class PersonaRetiroAlumno {
    private $personaRetiro;

    private $alumno;

    private $parentesco;

    function __construct() {
    }

    public function getPersonaRetiro() {
        return $this->personaRetiro;
    }

    public function setPersonaRetiro($personaRetiro) {
        $this->personaRetiro = $personaRetiro;
    }

    public function getAlumno() {
        return $this->alumno;
    }

    public function setAlumno($alumno) {
        $this->alumno = $alumno;
    }

    public function getParentesco() {
        return $this->parentesco;
    }

    public function setParentesco($parentesco) {
        $this->parentesco = $parentesco;
    }

}
?>
