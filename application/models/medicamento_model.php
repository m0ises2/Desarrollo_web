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

	function obt_cantidad()
	{
		
	}

	function borrar( $codigo, $cant)
	{
		$query = $this->db->query("SELECT cantidad FROM medicamento WHERE codigo=".$codigo);

		foreach ($query->result() as $fila) {
			$cantidad = $fila->cantidad;
		}

		if( $cant == $cantidad )
		{
			$this->db->query("DELETE FROM medicamento WHERE codigo=".$codigo);
		}else
		{
			$cantidad = $cantidad - $cant;
			$this->db->query("UPDATE medicamento SET cantidad = ".$cantidad." WHERE codigo = ".$codigo);
		}

	}
	function comprobar_cantidad( $codigo , $cant)
	{
		$query = $this->db->query("SELECT cantidad FROM medicamento WHERE codigo =".$codigo);

		foreach( $query->result() as $fila)
		{
			$dato = $fila->cantidad;
		}

		return $cant <= $dato;
	}
}


?>