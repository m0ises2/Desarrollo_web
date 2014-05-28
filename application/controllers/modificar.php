<?php

	class modificar extends CI_Controller
	{

		function index()
		{
			$this->load->model('usuario_model');
			
			if ( $this->session->userdata('user_id') )
			{
				if( $_GET )
				{
					$codigo = $this->encrypt->decode($_GET["id"]);
					$query1 = $this->db->query("SELECT * FROM medicamento WHERE codigo=$codigo;");
					$query2 = $this->db->query("SELECT * FROM principio WHERE codigo_med=$codigo ORDER BY cant_miligramos DESC;");
					
					$data = array('medicamento' => $query1, 'principio' => $query2);
					
					$this->load->view("Administrador/modificar", $data);
				}
				else
				{
					redirect("/");
				}
			}
			else
			{
				redirect('/inicio_sesion','refresh');
			}
		}
		
		
		function modificado()
		{
			$this->load->model('usuario_model');
			
			if ( $this->session->userdata('user_id') )
			{
				$update = "UPDATE medicamento SET ";
				
				
				$i = 0;
				
				foreach($_POST as $item => $valor)
				{
					$update .= "$item = '$valor', ";
					
					$i += 1;
					if($i == 6)
					{
						$update = substr($update, 0, -2);
						break;
					}
				}
				
				$update .= " WHERE codigo = $_POST[codigo];";
				$this->db->query($update);
				
				
				
				foreach($_POST['principios_cod'] as $item => $valor)
				{
					$update = "UPDATE principio SET nombre = '" . $_POST['principios_nom'][$item] . "', cant_miligramos = " . $_POST['principios_masa'][$item] . " WHERE codigo=$valor;";
					$this->db->query($update);
				}
				
				header("Location: " . site_url() . "principal");
				
			}
			else
			{
				redirect('/inicio_sesion','refresh');
			}
		}
		
		
	};

?>
