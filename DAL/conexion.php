<?php

class conexion{
    private $contrasena = "123456";
    private $usuario = "root";
    private $BaseDeDatos = "prueba";
    private $servidor = "localhost";
    function conectar()
    {
        try {
            $conexion = new PDO("mysql:host=$this->servidor;  dbname=$this->BaseDeDatos, user=$this->usuario, password=$this->contrasena");
            echo "BIEN" ;

            // $conexion->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
            // $conexion->exec("SET CHARACTER SET utf8");
            // return $conexion;
        }
            catch (PDOException $e) 
            {
            echo "Ocurrió un ERROR con la base de datos: " .    $e->getMessage();

        }
    }
}


$nuevaconexion = new conexion();
$nuevaconexion->conectar();