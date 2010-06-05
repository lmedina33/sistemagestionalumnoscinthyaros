<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/SistemaCR/servicios/TransaccionBD.class.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SistemaCR/dominio/Vacuna.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SistemaCR/dominio/Alumno.php';

/**
 * Description of DAOAlumno
 *
 * @author gerardobarcia
 */
class DAOAlumno {
   private $transaccion;

    function __construct() {
        $this->transaccion = new TransaccionBDclass();
    }

    function listarVacunasPorAlumno (Alumno $alumno) {
        $query = "SELECT v.id, v.nombre FROM VACUNA v, alumno a, alumno_has_vacuna av
                  WHERE a.expediente = av.ALUMNO_expediente
                  AND av.VACUNA_id = v.id AND a.expediente = '".$alumno->getExpediente()."'";
        $resultado = $this->transaccion->realizarTransaccion($query);
        $lista = new ArrayObject();
        while ($row = mysql_fetch_array($resultado)) {
            $vacuna = new Vacuna();
            $vacuna->setId($row[id]);
            $vacuna->setNombre($row[nombre]);
            $lista->append($vacuna);
        }
        $alumnoR = new Alumno();
        $alumnoR->setExpediente($alumno->getExpediente());
        $alumnoR->setListaVacunas($lista);
        return $alumnoR;
    }

    function agregarVacuna(Vacuna $vacuna, Alumno $alumno){
        $resultado = false;
        $query = "INSERT INTO `ALUMNO_has_VACUNA` (`ALUMNO_expediente`,
            `VACUNA_id`) VALUES ('".$alumno->getExpediente()."',
                                 " . $vacuna->getId().")";
        $resultado = $this->transaccion->realizarTransaccion($query);
        return $resultado;
    }

    function agregarPersonaRetiro (PersonaRetiroAlumno $pr) {
        $resultado = false;
        $numeroExpediente = $pr->getAlumno()->getExpediente();
        $cedulaPersonaRetiro = $pr->getPersonaRetiro()->getCedula();
        $parentesco = $pr->getParentesco();
        $query = "INSERT INTO `ALUMNO_has_PERSONARETIRO`
            (`ALUMNO_expediente`, `PERSONARETIRO_cedula`, `parentesco`)
            VALUES ( , ,);";

    }

    function agregarAlumno () {
        $query = "INSERT INTO `ALUMNO` (`expediente`, `cedula`, `nombres`, `apellidos`,
            `fechaNacimiento`, `lugarNacimiento`, `direccion`, `telefonoUno`, `telefonoDos`,
            `telefonoTres`, `procedePrescolar`, `procedeHogar`, `procedeOtro`, `nombreProcedeOtro`,
            `vivePapa`, `viveMama`, `viveHermano`, `viveHermana`, `viveAbuelo`, `viveAbuela`, `viveTio`,
            `viveTia`, `viveOtros`, `cuidaAlumno`, `emergenciaLlamar`, `telefonoEmergenciaUno`,
            `telefonoEmergenciaDos`, `emergenciaLLevar`, `fiebreAlta`, `psicologo`, `psicopedagogo`,
            `neurologo`, `terapistaLeng`, `motivoMedico`, `clinicaMedico`, `RecPartidaNac`,
            `RecConstVacuna`, `RecCedula`, `RecFotoRepresentante`, `RecFotoAlumno`, `RecOtros`,
            `foto`, `asmatico`, `alergico`, `activo`, `tranquilo`, `sociable`, `timido`,
            `comunicativo`, `sexo`, `enfermedades`, `medicamentosAlergia`, `otrasVacunas`,
            `transporte`, `transporteDos`)
            VALUES ( , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ,)";
        $resultado = $this->transaccion->realizarTransaccionInsertId($query);
    }
}
?>
