<?php
//Me Traigo todos los archivos a un unico archivo que seria este..loader.php
require 'Alumnos.php';
require 'Profesor.php';
require 'Curso.php';    
require 'ManagerSistema.php';

echo "<pre>";
//instancio mis objetos

$alumno2 = new Alumno('alm2','Pepe','Argento','pepe@gmail.com');

$profesor1 = new Profesor('Prof1','Daniel','Fuentes','dani@gmail.com');
$profesor2 = new Profesor('Prof2','Rodo','Master','rodo@gmail.com');

$curso1 = new Curso('fs1','fullStack',10);
$curso2 = new Curso('and2','Android',15);

//instancio mi objeto ManagerSistema, lo puedo declarar sin parametros porque en la function contructor declare sus parametros como NULL
$managerSistema = new ManagerSistema();

//los metodos set de MnanagerSistema se encarga de agregar el objeto.. 
$managerSistema->setAlumnos($alumno1);
$managerSistema->setCursos($curso1);
$managerSistema->setCursos($curso2);
$managerSistema->setProfesores($profesor1);

var_dump($managerSistema);

