<?php
	class Agregar_usuario extends CI_Controller
	{
		function index()
		{
			if( $_POST )
			{
				$this->load->view("Administrador/nuevo_usuario");
			}else
			{
				redirect("/");
			}
		}

		function agregar()
		{

		}
	};
?>