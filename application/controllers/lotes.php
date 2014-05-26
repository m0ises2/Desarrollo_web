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

				$data = array('medicamento' => $query);
				$this->load->view("Administrador/nuevo_lote",$data);
			}else{redirect("inicio_sesion");}
		}
	};
?>