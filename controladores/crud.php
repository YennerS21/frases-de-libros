<?php

class Crud{
    
    private $instruccion;
    private $id;
    private $tabla;
    private $datos;
    private $sql;

    public function __construct()
    {

    }

    public function insertar($tabla, $datos)
    {
        $this->instruccion = "Create";
        // $this->sql = "INSERT INTO $tabla VALUES($datos['id'], $datos['nombre']) ";
        return true;
    }
    public function leer($tabla)
    {
        $this->instruccion = "Read";
        $this->datos = "Todos los datos";
        return $this->datos;
    }
    public function modificar($tabla, $datos, $id)
    {
        $this->instruccion = "Update";
        return true;
    }
    public function eliminar($tabla, $id)
    {
        $this->instruccion = "Delete";
        return true;
    }
}

?>