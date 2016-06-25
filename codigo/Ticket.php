<?php
require_once ('Cliente.php');
require_once ('Evento.php');

/**
 * @author Edson Valdez Cossio
 * @version 1.0
 * @created 22-jun.-2016 9:38:43
 */
class Ticket
{

	var $cliente;
	var $evento;
	var $id;

	function Ticket()
	{
	}



	function getid()
	{
		return $this->id;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setid($newVal)
	{
		$this->id = $newVal;
	}

}
?>