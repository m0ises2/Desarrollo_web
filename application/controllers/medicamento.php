<?php
	class Medicamento extends CI_Controller
	{
		function mostrar()
		{
			$this->load->model('medicamento_model');
			if( $_POST )
			{
				$data = $this->medicamento_model->obt_info($_POST['codigo']);
				$data2 = $this->medicamento_model->obt_info($_POST['codigo']);

				//$datos = array('medicamento' => $data);
				$datos = array(
					'lote'=> $data2,
					'medicamento' => $data);				
			
				$this->load->view('Ventas/baja',$datos);
			}else
			{
				redirect('/');
			}
			
			//echo '<pre> POST'.print_r($_POST,true).'</pre>';
			/*foreach ($data->result() as $fila ) {
				echo $fila->laboratorio;
				echo " ".$fila->presentacion;
			}*/
		}

		function eliminar()
		{
			$this->load->model('medicamento_model');

			if( $_POST )
			{
				if( isset($_POST["unidosis"]) )
				{
					if( $this->medicamento_model->existe_unidosis($_POST["codigo"]) )
					{
						if( $this->medicamento_model->comprobar_cantidad_dosis($_POST["codigo"], $_POST["cant1"]) )
						{
							$this->medicamento_model->borrar_unidosis($_POST["codigo"], $_POST["cant1"]);
							redirect("/");
						}
					}
						$data = $this->medicamento_model->obt_info($_POST['codigo']);
						$data2 = $this->medicamento_model->obt_info($_POST['codigo']);

						//$datos = array('medicamento' => $data);
						$datos = array(
							'lote'=> $data2,
							'error' => TRUE,
							'medicamento' => $data);				
						
						$this->load->view('Ventas/baja',$datos);
					
				}else
				{									
					if( $this->medicamento_model->obt_cantidad($_POST['codigo']) == 0 && !$this->medicamento_model->existe_unidosis($_POST["codigo"]))
					{
						$this->medicamento_model->borrar_definitivo($_POST["codigo"]);
					}else
					{
						if( $this->medicamento_model->obt_cantidad($_POST['codigo']) == 0 )
						{
							$data = $this->medicamento_model->obt_info($_POST['codigo']);
							$data2 = $this->medicamento_model->obt_info($_POST['codigo']);

							//$datos = array('medicamento' => $data);
							$datos = array(
								'lote'=> $data2,
								'error' => TRUE,
								'medicamento' => $data);				
						
							$this->load->view('Ventas/baja',$datos);
						}else
						{
							if( $this->medicamento_model->comprobar_cantidad($_POST["codigo"], $_POST["cant1"]))
							{
								$this->medicamento_model->borrar($_POST["codigo"], $_POST["cant1"]);
								redirect('/');
							}
						}
						redirect('/');
					}
					
				}
			}else
			{
				redirect('/');
			}
		}

		function agregar()
		{
			$this->load->view("Administrador/nuevo_med");
		}
	};
?>