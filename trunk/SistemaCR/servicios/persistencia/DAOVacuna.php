<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/SistemaCR/servicios/TransaccionBD.class.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SistemaCR/dominio/Vacuna.php';

/**
 * Description of DAOVacuna
 *
 * @author gerardobarcia
 */
class DAOVacuna {
    private $transaccion;

    function __construct() {
        $this->transaccion = new TransaccionBDclass();
    }

    function listarVacunas() {
        $query = "SELECT * FROM VACUNA";
        $lista = new ArrayObject();
        $resultado = $this->transaccion->realizarTransaccion($query);
        while ($row = mysql_fetch_array($resultado)) {
            $vacuna = new Vacuna();
            $vacuna->setId($row[id]);
            $vacuna->setNombre($row[nombre]);
            $lista->append($vacuna);
        }
        return $lista;
    }

}
?>
