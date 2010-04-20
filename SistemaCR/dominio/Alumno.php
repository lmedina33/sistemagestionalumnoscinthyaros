<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Alumno
 *
 * @author gerardobarcia
 */
class Alumno {
    
    private $expediente;

    private $cedula;

    private $nombres;

    private $apellidos;

    private $fechaNac;

    private $lugarNac;

    private $direccion;

    private $telefono1;

    private $telefono2;

    private $telefono3;

    private $procedePreescolar;

    private $procedeHogar;

    private $procedeOtro;

    private $nombreProcedeOtro;

    private $vivePapa;

    private $viveMama;

    private $viveHermano;

    private $viveHermana;

    private $viveAbuelo;

    private $viveAbuela;

    private $viveTio;

    private $viveTia;

    private $viveOtros;

    private $cuidaAlumno;

    private $emergenciaLlamar;

    private $fiebreAlta;

    private $sicologo;

    private $psicopedagogo;

    private $neurologo;

    private $terapistaLenguaje;

    private $motivoMedico;

    private $clinicaMedico;

    private $recPartidaNac;

    private $recConstVacuna;

    private $recCedula;

    private $recFotoRep;

    private $recFotoAlumno;

    private $recOtros;

    private $foto;

    private $asmatico;

    private $alergico;

    private $activo;

    private $tranquilo;

    private $sociable;

    private $timido;

    private $comunicativo;

    private $sexo;


    private $listaMedicamentosAlergia;

    private $listaPeriodos;

    private $listaPersonaRetiroAlumno;

    private $listaVacunas;

    private $listaEnfermedades;

    private $listaGrupos;

    private $listaParentescoRepresentante;

    private $listaTransporteAlumno;

    function __construct() {
    }

    public function getExpediente() {
        return $this->expediente;
    }

    public function setExpediente($expediente) {
        $this->expediente = $expediente;
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getFechaNac() {
        return $this->fechaNac;
    }

    public function setFechaNac($fechaNac) {
        $this->fechaNac = $fechaNac;
    }

    public function getLugarNac() {
        return $this->lugarNac;
    }

    public function setLugarNac($lugarNac) {
        $this->lugarNac = $lugarNac;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getTelefono1() {
        return $this->telefono1;
    }

    public function setTelefono1($telefono1) {
        $this->telefono1 = $telefono1;
    }

    public function getTelefono2() {
        return $this->telefono2;
    }

    public function setTelefono2($telefono2) {
        $this->telefono2 = $telefono2;
    }

    public function getTelefono3() {
        return $this->telefono3;
    }

    public function setTelefono3($telefono3) {
        $this->telefono3 = $telefono3;
    }

    public function getProcedePreescolar() {
        return $this->procedePreescolar;
    }

    public function setProcedePreescolar($procedePreescolar) {
        $this->procedePreescolar = $procedePreescolar;
    }

    public function getProcedeHogar() {
        return $this->procedeHogar;
    }

    public function setProcedeHogar($procedeHogar) {
        $this->procedeHogar = $procedeHogar;
    }

    public function getProcedeOtro() {
        return $this->procedeOtro;
    }

    public function setProcedeOtro($procedeOtro) {
        $this->procedeOtro = $procedeOtro;
    }

    public function getNombreProcedeOtro() {
        return $this->nombreProcedeOtro;
    }

    public function setNombreProcedeOtro($nombreProcedeOtro) {
        $this->nombreProcedeOtro = $nombreProcedeOtro;
    }

    public function getVivePapa() {
        return $this->vivePapa;
    }

    public function setVivePapa($vivePapa) {
        $this->vivePapa = $vivePapa;
    }

    public function getViveMama() {
        return $this->viveMama;
    }

    public function setViveMama($viveMama) {
        $this->viveMama = $viveMama;
    }

    public function getViveHermano() {
        return $this->viveHermano;
    }

    public function setViveHermano($viveHermano) {
        $this->viveHermano = $viveHermano;
    }

    public function getViveHermana() {
        return $this->viveHermana;
    }

    public function setViveHermana($viveHermana) {
        $this->viveHermana = $viveHermana;
    }

    public function getViveAbuelo() {
        return $this->viveAbuelo;
    }

    public function setViveAbuelo($viveAbuelo) {
        $this->viveAbuelo = $viveAbuelo;
    }

    public function getViveAbuela() {
        return $this->viveAbuela;
    }

    public function setViveAbuela($viveAbuela) {
        $this->viveAbuela = $viveAbuela;
    }

    public function getViveTio() {
        return $this->viveTio;
    }

    public function setViveTio($viveTio) {
        $this->viveTio = $viveTio;
    }

    public function getViveTia() {
        return $this->viveTia;
    }

    public function setViveTia($viveTia) {
        $this->viveTia = $viveTia;
    }

    public function getViveOtros() {
        return $this->viveOtros;
    }

    public function setViveOtros($viveOtros) {
        $this->viveOtros = $viveOtros;
    }

    public function getCuidaAlumno() {
        return $this->cuidaAlumno;
    }

    public function setCuidaAlumno($cuidaAlumno) {
        $this->cuidaAlumno = $cuidaAlumno;
    }

    public function getEmergenciaLlamar() {
        return $this->emergenciaLlamar;
    }

    public function setEmergenciaLlamar($emergenciaLlamar) {
        $this->emergenciaLlamar = $emergenciaLlamar;
    }

    public function getFiebreAlta() {
        return $this->fiebreAlta;
    }

    public function setFiebreAlta($fiebreAlta) {
        $this->fiebreAlta = $fiebreAlta;
    }

    public function getSicologo() {
        return $this->sicologo;
    }

    public function setSicologo($sicologo) {
        $this->sicologo = $sicologo;
    }

    public function getPsicopedagogo() {
        return $this->psicopedagogo;
    }

    public function setPsicopedagogo($psicopedagogo) {
        $this->psicopedagogo = $psicopedagogo;
    }

    public function getNeurologo() {
        return $this->neurologo;
    }

    public function setNeurologo($neurologo) {
        $this->neurologo = $neurologo;
    }

    public function getTerapistaLenguaje() {
        return $this->terapistaLenguaje;
    }

    public function setTerapistaLenguaje($terapistaLenguaje) {
        $this->terapistaLenguaje = $terapistaLenguaje;
    }

    public function getMotivoMedico() {
        return $this->motivoMedico;
    }

    public function setMotivoMedico($motivoMedico) {
        $this->motivoMedico = $motivoMedico;
    }

    public function getClinicaMedico() {
        return $this->clinicaMedico;
    }

    public function setClinicaMedico($clinicaMedico) {
        $this->clinicaMedico = $clinicaMedico;
    }

    public function getRecPartidaNac() {
        return $this->recPartidaNac;
    }

    public function setRecPartidaNac($recPartidaNac) {
        $this->recPartidaNac = $recPartidaNac;
    }

    public function getRecConstVacuna() {
        return $this->recConstVacuna;
    }

    public function setRecConstVacuna($recConstVacuna) {
        $this->recConstVacuna = $recConstVacuna;
    }

    public function getRecCedula() {
        return $this->recCedula;
    }

    public function setRecCedula($recCedula) {
        $this->recCedula = $recCedula;
    }

    public function getRecFotoRep() {
        return $this->recFotoRep;
    }

    public function setRecFotoRep($recFotoRep) {
        $this->recFotoRep = $recFotoRep;
    }

    public function getRecFotoAlumno() {
        return $this->recFotoAlumno;
    }

    public function setRecFotoAlumno($recFotoAlumno) {
        $this->recFotoAlumno = $recFotoAlumno;
    }

    public function getRecOtros() {
        return $this->recOtros;
    }

    public function setRecOtros($recOtros) {
        $this->recOtros = $recOtros;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

    public function getAsmatico() {
        return $this->asmatico;
    }

    public function setAsmatico($asmatico) {
        $this->asmatico = $asmatico;
    }

    public function getAlergico() {
        return $this->alergico;
    }

    public function setAlergico($alergico) {
        $this->alergico = $alergico;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }

    public function getTranquilo() {
        return $this->tranquilo;
    }

    public function setTranquilo($tranquilo) {
        $this->tranquilo = $tranquilo;
    }

    public function getSociable() {
        return $this->sociable;
    }

    public function setSociable($sociable) {
        $this->sociable = $sociable;
    }

    public function getTimido() {
        return $this->timido;
    }

    public function setTimido($timido) {
        $this->timido = $timido;
    }

    public function getComunicativo() {
        return $this->comunicativo;
    }

    public function setComunicativo($comunicativo) {
        $this->comunicativo = $comunicativo;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getListaMedicamentosAlergia() {
        return $this->listaMedicamentosAlergia;
    }

    public function setListaMedicamentosAlergia($listaMedicamentosAlergia) {
        $this->listaMedicamentosAlergia = $listaMedicamentosAlergia;
    }

    public function getListaPeriodos() {
        return $this->listaPeriodos;
    }

    public function setListaPeriodos($listaPeriodos) {
        $this->listaPeriodos = $listaPeriodos;
    }

    public function getListaPersonaRetiroAlumno() {
        return $this->listaPersonaRetiroAlumno;
    }

    public function setListaPersonaRetiroAlumno($listaPersonaRetiroAlumno) {
        $this->listaPersonaRetiroAlumno = $listaPersonaRetiroAlumno;
    }

    public function getListaVacunas() {
        return $this->listaVacunas;
    }

    public function setListaVacunas($listaVacunas) {
        $this->listaVacunas = $listaVacunas;
    }

    public function getListaEnfermedades() {
        return $this->listaEnfermedades;
    }

    public function setListaEnfermedades($listaEnfermedades) {
        $this->listaEnfermedades = $listaEnfermedades;
    }

    public function getListaGrupos() {
        return $this->listaGrupos;
    }

    public function setListaGrupos($listaGrupos) {
        $this->listaGrupos = $listaGrupos;
    }

    public function getListaParentescoRepresentante() {
        return $this->listaParentescoRepresentante;
    }

    public function setListaParentescoRepresentante($listaParentescoRepresentante) {
        $this->listaParentescoRepresentante = $listaParentescoRepresentante;
    }

    public function getListaTransporteAlumno() {
        return $this->listaTransporteAlumno;
    }

    public function setListaTransporteAlumno($listaTransporteAlumno) {
        $this->listaTransporteAlumno = $listaTransporteAlumno;
    }    

}
?>
