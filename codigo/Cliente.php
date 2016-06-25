<?php


/**
 * @author Edson Valdez Cossio
 * @version 1.0
 * @created 22-jun.-2016 9:38:53
 */
class Cliente
{

	var $apellido;
	var $email;
	var $id;
	var $nombre;
	var $telefono;
	var $m_Ticket;

	function Cliente()
	{
	}



	function getapellido()
	{
		return $this->apellido;
	}

	function getemail()
	{
		return $this->email;
	}

	function getid()
	{
		return $this->id;
	}

	function getnombre()
	{
		return $this->nombre;
	}

	function gettelefono()
	{
		return $this->telefono;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setapellido($newVal)
	{
		$this->apellido = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setemail($newVal)
	{
		$this->email = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setid($newVal)
	{
		$this->id = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setnombre($newVal)
	{
		$this->nombre = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function settelefono($newVal)
	{
		$this->telefono = $newVal;
	}

}
?>