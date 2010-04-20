<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vacuna
 *
 * @author gerardobarcia
 */
class Vacuna {
    private $id;

    private $nombre;

    private $listaAlumnos;

    function __construct() {
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getListaAlumnos() {
        return $this->listaAlumnos;
    }

    public function setListaAlumnos($listaAlumnos) {
        $this->listaAlumnos = $listaAlumnos;
    }
    
}
?>
