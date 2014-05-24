<?php
///Controlador que carga la vista principal dependiendo de que tipo de usuario sea. Administrador o Vendedo común.

	class Principal extends CI_Controller
	{

		function index()
		{
			$this->load->model('usuario_model');

			if( $this->session->userdata('user_id') )
			{
				$dato = $this->usuario_model->obtener_privilegio( $this->session->userdata('user_id') );

				if( strcmp($dato, "administrador") == 0 )
				{
					$this->load->database();
					$query = $this->db->query("SELECT * FROM medicamento;");
					$data = array('medicamento' => $query);
					$this->load->view("Administrador/vista_principal", $data);
				}
				else
				{
					$this->load->model('medicamento_model');
					$data = $this->medicamento_model->obt_medicamentos();
					$data2 = $this->medicamento_model->obt_unidosis();
					
					$uni = array();
					
					foreach( $data2->result() as $fila2 )
					{
						$uni[$fila2->codigo_med] = $fila2->cantidad_dosis;
					}
					
					$data = array('medicamento' => $data,
									'unidosis' => $uni);
					
					$this->load->view("Ventas/vista_principal",$data);
				}
			}else
			{
				redirect('/inicio_sesion','refresh');
			}
		}	

	};

?>
