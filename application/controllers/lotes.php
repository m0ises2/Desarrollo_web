<?php
	class Lotes extends CI_Controller
	{
		function index()
		{
			if( $this->session->userdata('user_id') )
			{
				$this->load->view("Administrador/nuevo_lote");
			}else
			{
				redirect("/");
			}
		}

		function nuevo_lote()
		{
			if( $_GET && $this->session->userdata('user_id') )
			{
				$this->load->model("medicamento_model");
				$query = $this->medicamento_model->obt_info($this->encrypt->decode($_GET["id"]));

				$data = array('medicamento' => $query,
							  'codigo' => $this->encrypt->decode($_GET["id"]));
				$this->load->view("Administrador/nuevo_lote",$data);
			}else
			{
				redirect("/");
			}
		}

		function agregar_lote()
		{
			if( $_POST && $this->session->userdata('user_id') )
			{
				$this->load->model("medicamento_agregar");
				if( !$this->medicamento_agregar->existe_lote($_POST["num_lote"]) )
				{
					$this->medicamento_agregar->agregar_lote($_POST["num_lote"],$_POST["cant"],$_POST["fecha_e"],$_POST["fecha_v"],$_POST["codigo"]);
				}

				$this->medicamento_agregar->modificar_med($_POST["codigo"],$_POST["cant"]);

			}
			redirect("/");
		}
	};
?>