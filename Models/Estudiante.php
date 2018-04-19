<?php namespace Models;

class ClassName
{

	private $id;
	private $nombre;
	private $edad;
	private $promedio;
	private $imagen;
	private $id_seccion;
	private $fecha;

	private $objCon;
	
	function __construct(argument)
	{
		$this->objCon = new Conexion();
	}

	public function listar(){
		$sql = "SELECT t1.*, t2.nombre FROM estudiantes as t1 INNER JOIN secciones as t2 ON t1.id_seccion = t2.id";
		return $this->objCon->consultaRetorno($sql);
	}

	public function  add(){
		$sql = "INSERT INTO estudiantes(id,nombre,edad,promedio,imagen,id_seccion,fecha) VALUES(NULL,'{$this->nombre}','{$this->edad}','{$this->promedio}','{$this->imagen}','{$this->id_seccion}',NOW())";
		$this->objCon->consultaSimple($sql);
	}

	public function delete(){
		$sql = "DELETE FROM estudiantes WHERE id = '{$this->id}'";
		$this->objCon->consultaSimple($sql);
	}

	public function edit(){
		$sql = "UPDATE estudiantes SET nombre = '{$this->nombre}', edad = '{$this->edad}', promedio = '{$this->promedio}', id_seccion = '{$this->id_seccion}' WHERE id = '{$this->id}'";
		$this->objCon->consultaSimple($sql);
	}

	public function view(){
		$sql = "SELECT t1.*, t2.nombre FROM estudiantes as t1 INNER JOIN secciones as t2 ON t1.id_seccion = t2.id WHERE t1.id = '{$this->id}'";

		return $objCon->consultaSimple($sql);
	}
}