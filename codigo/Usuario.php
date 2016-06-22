<?php


/**
 * @author Edson Valdez Cossio
 * @version 1.0
 * @created 22-jun.-2016 9:18:33
 */
class Usuario
{

	var $id;
	var $nombre;

	function Usuario()
	{
	}

	function getid()
	{
		return $this->id;
	}

	function getnombre()
	{
		return $this->nombre;
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



}
?>