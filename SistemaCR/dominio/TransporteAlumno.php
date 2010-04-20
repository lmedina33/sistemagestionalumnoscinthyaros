<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TransporteAlumno
 *
 * @author gerardobarcia
 */
class TransporteAlumno {

   private $alumno;

   private $transporte;

   private $fechaInicio;

   private $fechaFin;

   function __construct() {
   }

   public function getAlumno() {
       return $this->alumno;
   }

   public function setAlumno($alumno) {
       $this->alumno = $alumno;
   }

   public function getTransporte() {
       return $this->transporte;
   }

   public function setTransporte($transporte) {
       $this->transporte = $transporte;
   }

   public function getFechaInicio() {
       return $this->fechaInicio;
   }

   public function setFechaInicio($fechaInicio) {
       $this->fechaInicio = $fechaInicio;
   }

   public function getFechaFin() {
       return $this->fechaFin;
   }

   public function setFechaFin($fechaFin) {
       $this->fechaFin = $fechaFin;
   }
}
?>
