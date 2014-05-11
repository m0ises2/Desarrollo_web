<?php

class Inicio_sesion extends CI_Controller
{
	private $data;

	function index()
	{
		$this->load->view("inicio");		
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
			redirect('/index.php/principal','refresh');
		}else
		{
			$error = array(
				'error' => TRUE
			);
			$this->load->view('inicio',$error);
		}
	}
	
}

?>