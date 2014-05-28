<?php

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
			$uno = 1;
			
			foreach($_POST as $item => $valor)
			{
				if($valor != "")
				{
					$condicion .= str_replace("_", ".", $item, $uno) . " = '$valor' OR ";
				}
			}
			$condicion = substr($condicion, 0, -4);
			
			if ( $condicion != "" and $this->session->userdata('user_id') )
			{
				$dato = $this->usuario_model->obtener_privilegio( $this->session->userdata('user_id') );

				if( $dato == "administrador" )
				{
					$this->load->database();
					$query = $this->db->query("SELECT DISTINCT medicamento.* FROM principal, principio, medicamento WHERE ($condicion) AND principio.codigo_med=medicamento.codigo AND principal.codigo_med=medicamento.codigo ORDER BY medicamento.nombre;");
					$data = array('medicamento' => $query);
					
					if($query->num_rows() != 0)
					{
						$this->load->view("Administrador/vista_principal", $data);
					}
					else
					{
						header("Location: " . site_url() . "busq_avanzada/buscar");
					}
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
