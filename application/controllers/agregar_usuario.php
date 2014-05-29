<?php
	class Agregar_usuario extends CI_Controller
	{
		function index()
		{
			if( $this->session->userdata('user_id') )
			{
				$this->load->view("Administrador/nuevo_usuario");
			}else
			{
				redirect("/");
			}
		}

		function agregar()
		{
			if( $this->session->userdata('user_id') && $_POST)
			{
				$this->load->model("usuario_model");
				if($this->usuario_model->existe($_POST["usuario"]))
				{
					$data = array('error' => TRUE,'user' => $_POST["usuario"]);
					$this->load->view("Administrador/nuevo_usuario",$data);
				}else
				{
					if( isset($_POST["privi"]) )
					{
						$this->usuario_model->agregar_usuario($_POST["usuario"],$_POST["contrasena"], "administrador");
					}else
					{
						$this->usuario_model->agregar_usuario($_POST["usuario"],$_POST["contrasena"], "ventas");
						$data = array('name' => $_POST["usuario"]);
						$this->load->view("Administrador/exito",$data);
					}					
				}
			}else
			{
				redirect("/");
			}
		}
	};
?>