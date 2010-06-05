<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/SistemaCR/servicios/persistencia/DAOAlumno.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SistemaCR/dominio/Vacuna.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SistemaCR/dominio/Alumno.php';

$daoAlumnoPrueba = new DAOAlumno();

// Asignar vacuna a alumno
$vacuna = new Vacuna();
$vacuna->setId(8);
$alumno = new Alumno();
$alumno->setExpediente('01017079793');
$resultado = $daoAlumnoPrueba->agregarVacuna($vacuna, $alumno);
echo $resultado;


// Listar vacunas por alumno
$alumno = new Alumno();
$alumno->setExpediente('01017079793');
$alumno = $daoAlumnoPrueba->listarVacunasPorAlumno($alumno);
foreach ($alumno->getListaVacunas() as $enf) {
    echo $enf->getNombre();
}


?>
