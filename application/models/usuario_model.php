<?php

class Usuario_model extends CI_Model
{
	function obtener_info( $data )
	{
		$query = "SELECT id FROM usuario WHERE nombre = ? AND contrasena = ?";
		return ( $this->db->query($query,array($data['nombre'],$data['contrasena'])));
	}

	function obtener_privilegio($data)
	{
		return ($this->db->query("SELECT privilegios FROM usuario WHERE id = ".$data)->row()->privilegios);
	}
}

?>