<?php
/**
 * Created by PhpStorm.
 * User: mauricio
 * Date: 14/01/2019
 * Time: 12:26
 */
namespace Datos;
include_once ("modelo/Persona.php");

class Estudiante extends Persona
{
    private $idGrupo;
    private $fecha_matricula; //aaaammdd
    private static $contadorE=0;

    public function __construct($idGrupo, $fechaM, $nif, $nombre, $fecha, $ecivil, $altura)
    {
        parent::__construct($nif, $nombre, $fecha, $ecivil, $altura);
        $this->idGrupo=$idGrupo;
        $this->fecha_matricula= $fechaM;
        self::$contadorE++;
       // echo get_parent_class($this);
    }

    /**
     * @return int
     */
    public static function getContadorE(): int
    {
        return self::$contadorE;
    }

}