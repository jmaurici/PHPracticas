<?php

namespace Datos;
require("modelo/Humano.php");

class  Persona implements Humano, Interfaz2
{


    private $nif;
    private $nombre;
    private $fecha;


    private $ecivil; //'S,C,D,A'
    private $altura;
    private static $contadorP = 0;


    public function __construct($nif, $nombre, $fecha, $ecivil, $altura)
    {

        $this->nif = $nif;
        $this->nombre = $nombre;
        $this->fecha = $fecha;
        $this->ecivil = $ecivil;
        $this->altura = $altura;

        self::$contadorP++;
    }

    /**
     * @return int
     */
    public static function getContadorP(): int
    {
        return self::$contadorP;
    }

    public function getNif()
    {

        return $this->nif;
    }


    public function setNif($nif)
    {
        $this->nif = $nif;
    }


    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getEcivil()
    {
        return $this->ecivil;
    }

    /**
     * @param mixed $ecivil
     */
    public function setEcivil($ecivil)
    {
        $this->ecivil = $ecivil;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    } // entero cms.


    public function caminar($numPasos)
    {
        return $numPasos * 1.23;
    }

    public function dormir($numHoras)
    {
        return ($numHoras >= 8);
    }

    public function metodo2()
    {
        // TODO: Implement metodo2() method.
    }

    public function __toString()
    {
        return $this->nif . "#" . self::FOO2;
    }
}


interface Interfaz2
{
    public function metodo2();


}