<?php
//Modelo encargado de consultar los medicamentos.

class Medicamento_model extends CI_Model
{
	function obt_medicamentos()
	{
		return ($this->db->query('SELECT * FROM medicamento'));
	}

	function obt_info( $codigo )
	{
		$query = $this->db->query("SELECT * FROM medicamento WHERE codigo = ".$codigo);
		return $query ;
	}

	function obt_codigo_lote()
	{
		$query = $this->db->query("SELECT codigo_lote FROM medicamento WHERE codigo = ".$codigo);
		return $query ;
	}

	function borrar( $codigo )
	{
		
	}
}


?>