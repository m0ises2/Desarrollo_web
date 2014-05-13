<?php
//Modelo encargado de consultar los medicamentos.

class Medicamento_model extends CI_Model
{
	function obt_medicamentos()
	{
		return ($this->db->query('SELECT * FROM medicamento'));
	}
}


?>