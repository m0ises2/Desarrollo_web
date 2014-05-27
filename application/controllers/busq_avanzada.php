<?php
///Controlador que carga la vista principal dependiendo de que tipo de usuario sea. Administrador o Vendedo común.

	class busq_avanzada extends CI_Controller
	{

		function buscar()
		{
			$this->load->model('usuario_model');

			
			if ( $this->session->userdata('user_id') )
			{
				$this->load->view("Administrador/busqueda_avanzada");
			}
			else
			{
				redirect('/inicio_sesion','refresh');
			}
		}
		
		
		function item()
		{
			$this->load->helper('form');
			$this->load->model('usuario_model');
			
			$condicion = "";
			
			foreach($_POST as $item => $valor)
			{
				if($valor != "")
				{
					$condicion .= str_replace("_", ".", $item) . " = '$valor' OR ";
				}
			}
			$condicion = substr($condicion, 0, -4);
			
			if ( $condicion != "" and $this->session->userdata('user_id') )
			{
				$dato = $this->usuario_model->obtener_privilegio( $this->session->userdata('user_id') );

				if( $dato == "administrador" )
				{
					$this->load->database();
					$query = $this->db->query("SELECT DISTINCT medicamento.* FROM principal, principio, medicamento WHERE ($condicion) AND principio.codigo_med=medicamento.codigo AND principal.codigo_lote=medicamento.codigo_lote ORDER BY medicamento.nombre;");
					$data = array('medicamento' => $query);
					$this->load->view("Administrador/vista_principal", $data);
				}
				else
				{
					redirect('/');
				}
			}
			elseif (! $this->session->userdata('user_id'))
			{
				redirect('/inicio_sesion','refresh');
			}
			elseif ( $condicion == "" )
			{
				header("Location: " . site_url() . "busq_avanzada/buscar");
			}
		}
		
		
	};

?>
