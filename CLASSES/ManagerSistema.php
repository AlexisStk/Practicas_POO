<?php

class ManagerSistema
{
    private $cursos = [];
    private $profesores = [];
    private $alumnos = [];

    public function __construct($cursos = null,  $profesores = null, $alumnos = null)
    {
        $this->cursos = $cursos;
        $this->profesores = $profesores;
        $this->alumnos = $alumnos;
    }
    //setter agrega instancias al array $cursos...
    public function setCursos($curso)
    {
        $this->cursos[] = $curso;
    }

    public function getCursos()
    {
        return $this->cursos;
    }

    public function setProfesores($profesor)
    {
        $this->profesores[] = $profesor;
    }

    public function getProfesores()
    {
        return $this->profesores;
    }

    public function setAlumnos($alumno)
    {
        $this->alumnos[] = $alumno;
    }

    public function getAlumnos()
    {
        return $this->alumnos;
    }
}

