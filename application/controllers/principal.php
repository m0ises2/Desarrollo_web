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
					$this->session->unset_userdata('user_id');
					echo "Ud. es un usuario administrador y, por ende, su vista todavia no esta disponible";
				}else
				{
					$this->load->model('medicamento_model');
					$data = $this->medicamento_model->obt_medicamentos();
					$data = array('medicamento' => $data );
					
					$this->load->view("Ventas/vista_principal",$data);
				}
			}else
			{
				redirect('/index.php/inicio_sesion','refresh');
			}
		}	

	};

?>