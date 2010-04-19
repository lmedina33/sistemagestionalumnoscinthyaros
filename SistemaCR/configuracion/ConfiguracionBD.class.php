<?php
/**
 * Description of ConfiguracionBDclass
 * Clase para la configuración de los datos de la base de datos
 * @author gerardobarcia
 */
class ConfiguracionBDclass {

    // variable que contiene la instacia de la clase
    static $_instance;

    private function __construct() {
    }

    /**
     * Metodo para obtener una instancia de la clase (Singleton)
     * @return <instancia> la instancia de la clase
     */
    public static function getInstance() {
        if( ! (self::$_instance instanceof self) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }


    private $databaseURL = "localhost";
    private $databaseUserName = "root";
    private $databasePWord = "admin";
    private $databaseName = "makoro";

    public function getDatabaseURL() {
        return $this->databaseURL;
    }

    public function getDatabaseUserName() {
        return $this->databaseUserName;
    }

    public function getDatabasePWord() {
        return $this->databasePWord;
    }

    public function getDatabaseName() {
        return $this->databaseName;
    }
}
?>
