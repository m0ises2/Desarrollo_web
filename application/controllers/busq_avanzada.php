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
			$array1 = array("medicamento_", "principal_", "principio_");
			$array2 = array("medicamento.", "principal.", "principio.");
			
			foreach($_POST as $item => $valor)
			{
				if($valor != "")
				{
					$condicion .= str_replace($array1, $array2, $item) . " = '$valor' AND ";
				}
			}
			$condicion = substr($condicion, 0, -5);
			
			if ( $condicion != "" and $this->session->userdata('user_id') )
			{
				$dato = $this->usuario_model->obtener_privilegio( $this->session->userdata('user_id') );

				if( $dato == "administrador" )
				{
					$this->load->database();
					$query = $this->db->query("SELECT DISTINCT medicamento.*, cantidad_dosis FROM principal, principio, medicamento, unidosis WHERE ($condicion) AND principio.codigo_med=medicamento.codigo AND principal.codigo_med=medicamento.codigo AND medicamento.codigo=unidosis.codigo_med ORDER BY medicamento.nombre;");
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
