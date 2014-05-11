<?php

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
					echo "Vista todavia no disponible";
				}else
				{
					$this->load->view("vista_principal");
				}
			}else
			{
				redirect('/index.php/inicio_sesion','refresh');
			}
		}	

	};

?>