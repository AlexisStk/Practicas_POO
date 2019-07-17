<?php

class Curso
{
    private $idCurso;
    private $nombre;
    private $vacante;


    public function __construct($idCurso,$nombre,$vacante)
    {
        $this->idCurso = $idCurso;
        $this->nombre = $nombre;
        $this->vacante = $vacante;
    }

    public function setIdCurso($idCurso)
    {
        $this->idCurso = $idCurso;
    }

    public function getIdCurso()
    {
        return $this->idCurso;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setVacante($vacante)
    {
        $this->vacante = $vacante;
    }

    public function getVacante()
    {
        return $this->vacante;
    }
}