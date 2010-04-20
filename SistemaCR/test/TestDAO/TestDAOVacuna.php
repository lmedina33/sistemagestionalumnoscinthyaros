<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/SistemaCR/servicios/persistencia/DAOVacuna.php';

$daoVacunaPrueba = new DAOVacuna();
$resultado = $daoVacunaPrueba->listarVacunas();
echo '******** TEST LISTAR VACUNAS **********<br>';
foreach ($resultado as $vacuna) {
    echo 'id: ' . $vacuna->getId() . ' ';
    echo '| nombre: ' . $vacuna->getNombre();
    echo '<br>';
}

?>
