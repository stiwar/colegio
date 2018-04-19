<?php namespace Models;

  class Conexion{
  	
  	private $datos = array(

  			 'host' => 'localhost',
  			 'user' => 'root',
  			 'pwd'  => 'adminDE0',
  			 'db'   => 'mdb'
  	);

  	private $objMysqli;

  	public function __construct(){
  		$this->objMysqli = new \mysqli(
                              $datos['host'],
                              $datos['user'],
                              $datos['pwd'],
                              $datos['db']
  		                   );
  	}

  	public function consultaSimple($sql){
  		$this->objMysqli->query($sql);
  	}

  	public function consultaRetorno($sql){
  		return $this->objMysqli->query($sql);
  	}

  }