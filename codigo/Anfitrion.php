<?php


/**
 * @author Edson Valdez Cossio
 * @version 1.0
 * @created 22-jun.-2016 9:31:52
 */
class Anfitrion
{

	var $id;
	var $nombre;
	var $m_Evento;

	function Anfitrion()
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