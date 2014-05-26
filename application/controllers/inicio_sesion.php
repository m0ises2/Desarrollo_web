<?php
//Controlador encargado de iniciar la sesión en el sistema.

class Inicio_sesion extends CI_Controller
{
	private $data;

	function index()
	{

		if( $this->session->userdata('user_id') ) 
		{
			redirect('/principal','refresh');		
		}

		$this->load->view("Ventas/inicio");
		
	}

	function establecer_sesion()
	{
		foreach ($this->data->result() as $fila) {
				$this->session->set_userdata('user_id',$fila->id);
			}
	}

	function validar()
	{
		$this->load->model('usuario_model');
		if( $_POST )
		{	
			$data = array
			(
				'nombre' => $_POST['username'],
				'contrasena' => $_POST['password']
			);

			$this->data = $this->usuario_model->obtener_info($data);

			if ( $this->data->num_rows() > 0 )
			{
				$this->establecer_sesion();
				unset($this->data);
				redirect('/');
			}else
			{
				$error = array(
					'error' => TRUE
				);
				$this->load->view('Ventas/inicio',$error);
			}
		}else
		{
			redirect('/');	
		}
	}

	function cerrar_sesion()
	{
		if( $this->session->userdata('user_id') )
		{
			$this->session->sess_destroy();			
		}

		redirect('/inicio_sesion','refresh');
	}
	
}

?>