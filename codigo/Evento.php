<?php
require_once ('Usuario.php');

/**
 * @author Edson Valdez Cossio
 * @version 1.0
 * @created 22-jun.-2016 9:31:08
 */
class Evento
{

	var $anfitrion;
	var $fechafin;
	var $fechainicio;
	var $id;
	var $maximotickets;
	var $titulo;
	var $m_Ticket;

	function Evento()
	{
	}



	function getanfitrion()
	{
		return $this->anfitrion;
	}

	function getfechafin()
	{
		return $this->fechafin;
	}

	function getfechainicio()
	{
		return $this->fechainicio;
	}

	function getid()
	{
		return $this->id;
	}

	function getmaximotickets()
	{
		return $this->maximotickets;
	}

	function gettitulo()
	{
		return $this->titulo;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setanfitrion($newVal)
	{
		$this->anfitrion = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setfechafin($newVal)
	{
		$this->fechafin = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setfechainicio($newVal)
	{
		$this->fechainicio = $newVal;
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
	function setmaximotickets($newVal)
	{
		$this->maximotickets = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function settitulo($newVal)
	{
		$this->titulo = $newVal;
	}

}
?>