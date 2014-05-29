<?php
//Modelo encargado de hacer las consultas de datos de los usuarios, para validar el inision de sesión.

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

	function existe( $nombre )
	{
		return $this->db->get_where('usuario',array('nombre'=>$nombre))->num_rows() > 0;
	}
	
	function agregar_usuario( $user, $pass,$privi )
	{
		$this->db->insert('usuario',array('nombre' => $user, 'contrasena' => $pass, 'privilegios' => $privi));
	}
}

?>