<?php
//Creo la clase Alumno
class Alumno
{   //Atributos
    private $idAlumno;
    private $nombre;
    private $apellido;
    private $email;

    //metodo Contructor
    public function __construct($idAlumno,$nombre,$apellido,$email)
    {
        $this->idAlumno = $idAlumno;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
    }

    //creando Getters(para mostrar) y Setters(para poder setear los valores de cada atributo)

    
    public function setIdAlumno($idAlumno)
    {
        $this->idAlumno = $idAlumno;
    }

    public function getIdAlumno()
    {
        return $this->idAlumno;
    }
    
    
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    
    public function getApellido()
    {
        return $this->apellido;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

//instancio la Clase Alumno

$alumno1 = new Alumno('0','Alexis','Ramirez','alexis.stk3@gmail.com');
// var_dump($alumno1);

//Esto se puedo hacerlo porque el atributo 'nombre' esta definido como privado
// $alumno1->nombre = 'Gustavo';

//de esta forma puedo setear un valor y mostrarlo
$alumno1->setNombre('Gustavo');
var_dump($alumno1->getNombre());


