<?php namespace Models;

class Seccion
{
	private $id;
	private $nombre;
	private $objCon;

	public function __construct(){
		$this->$objCon = new Conexion();
	}

	public function listar(){
		$sql = 'SELECT * FROM secciones';
		return $objCon->consultaRetorno($sql);
	}

	public function add(){
		$sql = "INSERT INTO secciones(id,nombre) VALUES(NULL,'{$this->nombre}')";
		$this->objCon->consultaSimple($sql);
	}

	public function delete(){
		$sql = "DELETE FROM secciones WHERE id = '{$this->id}'";
		$this->objCon->consultaSimple($sql);
	}

	public function edit(){
		$sql = "UPDATE secciones SET nombre = '{$this->nombre}' WHERE id = '{$this->id}'";
		$this->objCon->consultaSimple($sql);
	}

	public function view(){
		$sql = "SELECT * FROM secciones WHERE id = '{$this->id}'";
		return $this->objCon->consultaRetorno($sql);
	}
}