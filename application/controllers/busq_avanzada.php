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
			$this->load->model('medicamento_model');
			
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
					$query1 = $this->db->query("SELECT DISTINCT medicamento.* FROM principal, principio, medicamento WHERE ($condicion) AND principio.codigo_med=medicamento.codigo AND principal.codigo_med=medicamento.codigo ORDER BY medicamento.nombre;");
					$query2 = $this->medicamento_model->obt_unidosis();
					
					foreach( $query2->result() as $fila2 )
					{
						$uni[$fila2->codigo_med] = $fila2->cantidad_dosis;
					}
					
					$data = array('medicamento' => $query1, 'unidosis' => $uni);
					
					if($query1->num_rows() != 0)
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
