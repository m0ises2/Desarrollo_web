<?php
//Modelo encargado de consultar los medicamentos.

class Medicamento_model extends CI_Model
{
	function obt_medicamentos()
	{
		return ($this->db->query('SELECT * FROM medicamento ORDER BY nombre'));
	}

	function obt_unidosis()
	{
		return ($this->db->query('SELECT codigo_med, cantidad_dosis FROM unidosis'));	
	}

	function obt_info( $codigo )
	{
		$query = $this->db->query("SELECT * FROM medicamento WHERE codigo = ".$codigo);
		return $query ;
	}

	function obt_codigo_lote( $codigo )
	{
		$query = $this->db->query("SELECT num_lote FROM principal WHERE codigo_med = ".$codigo);
		return $query ;
	}

	function obt_cantidad( $codigo )
	{
		$query = $this->db->query("SELECT cantidad FROM medicamento WHERE codigo=".$codigo);
		foreach ($query->result() as $value) {
			$resul = $value->cantidad;
		}
		return $resul;
	}

	function obt_principios( $codigo )
	{
		return $this->db->query("SELECT nombre,cant_miligramos FROM principio WHERE codigo_med=".$codigo);
	}

	function obt_cantidad_dosis( $codigo )
	{
		$query = $this->db->query("SELECT dosis FROM medicamento WHERE codigo=".$codigo);
		return $query;
	}

	function borrar( $codigo, $cant )
	{
		$query = $this->db->query("SELECT cantidad FROM medicamento WHERE codigo=".$codigo);

		foreach ($query->result() as $fila) {
			$cantidad = $fila->cantidad;
		}
	
		$cantidad = $cantidad - $cant;
		$this->db->query("UPDATE medicamento SET cantidad = ".$cantidad." WHERE codigo = ".$codigo);
		

	}

	function borrar_definitivo( $codigo )
	{
		$query = $this->db->query("SELECT cantidad FROM medicamento WHERE codigo=".$codigo);

		$this->db->query("DELETE FROM medicamento WHERE codigo=".$codigo);		

	}

	function borrar_unidosis($codigo,$cant)
	{
		$query = $this->db->query("SELECT cantidad_dosis FROM unidosis WHERE codigo_med=".$codigo);

		if($query->num_rows() > 0)
		{
			foreach ($query->result() as $fila) {
				$cantidad = $fila->cantidad_dosis;
			}

			if( $cant == $cantidad )
			{
				$this->db->query("DELETE FROM unidosis WHERE codigo_med=".$codigo);
			}else
			{
				$cantidad = $cantidad - $cant;
				$this->db->query("UPDATE unidosis SET cantidad_dosis = ".$cantidad." WHERE codigo_med = ".$codigo);
			}
		}
	}

	function existe_unidosis($codigo)
	{
		$query = $this->db->query("SELECT codigo FROM unidosis WHERE codigo_med=".$codigo);

		return ($query->num_rows() > 0);
	}

	function actualizar_unidosis($codigo, $cantidad, $caso)
	{
		if($caso == FALSE)//Se crea una nueva entrada.
		{
			$this->db->query("INSERT INTO unidosis (`codigo_med`, `cantidad_dosis`) VALUES (".$codigo.",".$cantidad.")");
		}else //Se actualiza una entrada.
		{
			$query = $this->db->query("SELECT cantidad_dosis FROM unidosis WHERE codigo_med = ".$codigo);
			foreach ($query->result() as $value) {
				$cantidad += $value->cantidad_dosis;
			}

			$this->db->query("UPDATE unidosis SET cantidad_dosis = ".$cantidad." WHERE codigo_med = ".$codigo);
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

	function comprobar_cantidad_dosis( $codigo , $cant)
	{
		$query = $this->db->query("SELECT cantidad_dosis FROM unidosis WHERE codigo_med =".$codigo);

		foreach( $query->result() as $fila)
		{
			$dato = $fila->cantidad_dosis;
		}

		if( $query->num_rows() == 0 )
		{
			return FALSE;
		}

		return $cant <= $dato;
	}
}


?>