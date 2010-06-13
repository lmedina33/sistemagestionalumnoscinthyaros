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

    function agregarVacunaAlumno($idVacuna, $expediente){
        $resultado = false;
        $query = "INSERT INTO 'ALUMNO_has_VACUNA' ('ALUMNO_expediente',
            'VACUNA_id') VALUES ('".$expediente."',
                                 " . $idVacuna.")";
        $resultado = $this->transaccion->realizarTransaccion($query);
        return $resultado;
    }

    function agregarPersonaRetiro (PersonaRetiroAlumno $pr) {
        $resultado = false;
        $numeroExpediente = $pr->getAlumno()->getExpediente();
        $cedulaPersonaRetiro = $pr->getPersonaRetiro()->getCedula();
        $parentesco = $pr->getParentesco();
        $query = "INSERT INTO 'ALUMNO_has_PERSONARETIRO'
            ('ALUMNO_expediente', 'PERSONARETIRO_cedula', 'parentesco')
            VALUES ( , ,);";

    }

    function agregarAlumno ($expediente, $cedula, $nombres,$apellidos,
                            $fechaNac, $lugarNac, $direccion,$telfUno,
                            $telfDos, $telfTres,$prodPrescolar,$prodHogar,
                            $prodOtro,$nombreProdOtro,$viveMama,$vivePapa,
                            $viveHermano,$viveHermana,$viveAbuelo,$viveAbuela,
                            $viveTio,$viveTia,$viveOtros,$cuidaAlumno,$emergenciaLlamar,
                            $telfEmergenciaUno,$telfEmergenciaDos,$emergenciaLlevar,
                            $fiebreAlta,$sicologo,$sicopedagogo,$neurologo,$terapistaLeng,
                            $motivoMedico,$clinicaMedico,$partidaNac,$constVacuna,
                            $recCedula,$FotoR,$FotoA,$recOtros,$foto,$asmatico,$alergico,
                            $activo,$tranquilo,$sociable,$timido,$comunicativo,$sexo,
                            $enfermedades,$medAlergia,$otrasVacunas,$transporte,$transDos) {
        $query = "INSERT INTO 'ALUMNO' ('expediente',
                                        'cedula',
                                        'nombres',
                                        'apellidos',
                                        'fechaNacimiento',
                                        'lugarNacimiento',
                                        'direccion',
                                        'telefonoUno',
                                        'telefonoDos',
                                        'telefonoTres',
                                        'procedePrescolar',
                                        'procedeHogar',
                                        'procedeOtro',
                                        'nombreProcedeOtro',
                                        'vivePapa',
                                        'viveMama',
                                        'viveHermano',
                                        'viveHermana',
                                        'viveAbuelo',
                                        'viveAbuela',
                                        'viveTio',
                                        'viveTia',
                                        'viveOtros',
                                        'cuidaAlumno',
                                        'emergenciaLlamar',
                                        'telefonoEmergenciaUno',
                                        'telefonoEmergenciaDos',
                                        'emergenciaLLevar',
                                        'fiebreAlta',
                                        'psicologo',
                                        'psicopedagogo',
                                        'neurologo',
                                        'terapistaLeng',
                                        'motivoMedico',
                                        'clinicaMedico',
                                        'RecPartidaNac',
                                        'RecConstVacuna',
                                        'RecCedula',
                                        'RecFotoRepresentante',
                                        'RecFotoAlumno',
                                        'RecOtros',
                                        'foto',
                                        'asmatico',
                                        'alergico',
                                        'activo',
                                        'tranquilo',
                                        'sociable',
                                        'timido',
                                        'comunicativo',
                                        'sexo',
                                        'enfermedades',
                                        'medicamentosAlergia',
                                        'otrasVacunas',
                                        'transporte',
                                        'transporteDos')
                                VALUES ( '".$expediente."', 
                                         '".$cedula."',
                                         '".$nombres."',
                                         '".$apellidos."',
                                         '".$fechaNac."',
                                         '".$lugarNac."',
                                         '".$direccion."',
                                         '".$telfUno."',
                                         '".$telfDos."',
                                         '".$telfTres."',
                                         '".$prodPrescolar."',
                                         '".$prodHogar."',
                                         '".$prodOtro."',
                                         '".$nombreProdOtro."',
                                         '".$vivePapa."',
                                         '".$viveMama."',
                                         '".$viveHermano."',
                                         '".$viveHermana."',
                                         '".$viveAbuelo."',
                                         '".$viveAbuela."',
                                         '".$viveTio."',
                                         '".$viveTia."',
                                         '".$viveOtros."',
                                         '".$cuidaAlumno."',
                                         '".$emergenciaLlamar."',
                                         '".$telfEmergenciaUno."',
                                         '".$telfEmergenciaDos."',
                                         '".$emergenciaLlevar."',
                                         '".$fiebreAlta."',
                                         '".$sicologo."',
                                         '".$sicopedagogo."',
                                         '".$neurologo."',
                                         '".$terapistaLeng."',
                                         '".$motivoMedico."',
                                         '".$clinicaMedico."',
                                         '".$partidaNac."',
                                         '".$constVacuna."',
                                         '".$constVacuna."',
                                         '".$recCedula."',
                                         '".$FotoR."',
                                         '".$FotoA."',
                                         '".$recOtros."',
                                         '".$foto."',
                                         '".$asmatico."',
                                         '".$alergico."',
                                         '".$activo."',
                                         '".$tranquilo."',
                                         '".$sociable."',
                                         '".$timido."',
                                         '".$comunicativo."',
                                         '".$sexo."',
                                         '".$enfermedades."',
                                         '".$medAlergia."',
                                         '".$otrasVacunas."',
                                         '".$transporte."',
                                         '".$transDos."')";
        $resultado = $this->transaccion->realizarTransaccionInsertId($query);
    }

    function agregarRepresentanteAlumno ($numExpediente, $parentesco,$cedula,$nombres,
                                         $apellidos,$edoCivil,$fechaNac,
                                         $direccion,$telfUno,$telfDos,$telfTres,$grado,
                                         $trabaja,$desTrabajo,$telfonoTrabUno,$telefonoTrabDos) {
        $query = "INSERT INTO 'REPRESENTANTE' ('cedula', 'nombres', 'apellidos',
                                               'estadoCivil', 'fechaNacimiento',
                                               'direccion', 'telefonoUno',
                                               'telefonoDos', 'TelefonoTres',
                                               'GradoInstruccion', 'trabaja',
                                               'descripcionTrabajo', 'telefonoTrabajoUno',
                                               'TelefonoTrabajoDos')
                                               VALUES ( '".$cedula."',
                                                        '".$nombres."',
                                                        '".$apellidos."',
                                                        '".$edoCivil."',
                                                        '".$fechaNac."',
                                                        '".$direccion."',
                                                        '".$telfUno."',
                                                        '".$telfDos."',
                                                        '".$telfTres."',
                                                        '".$grado."',
                                                        '".$trabaja."',
                                                        '".$desTrabajo."',
                                                        '".$telfonoTrabUno."',
                                                        '".$telefonoTrabDos."')";
           $resultado = $this->transaccion->realizarTransaccionInsertId($query);
           $queryInterseccion = "INSERT INTO 'PARENTESCO' ('ALUMNO_expediente',
                                                           'REPRESENTANTE_cedula',
                                                           'parentesco')
                                                           VALUES ( '".$numExpediente."', 
                                                               '".$cedula."','".$parentesco."')";
           $resultado = $this->transaccion->realizarTransaccionInsertId($queryInterseccion);
    }
}
?>
