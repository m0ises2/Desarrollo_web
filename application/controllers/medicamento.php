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
				redirect("/");
			}			
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

		function alta()
		{
			if( $this->session->userdata('user_id') )
			{
				$this->load->view("Administrador/nuevo_med");
			}else
			{
				redirect("/");
			}			
		}

		function agregar()
		{
			if( $this->session->userdata('user_id') && $_POST )
			{
				$this->load->model("medicamento_agregar");
								
				if( $this->medicamento_agregar->existe_lote($_POST["lote"]) )
				{
					$result = $this->medicamento_agregar->existe( $_POST["nom"], $_POST["lab"], $_POST["pres"] );
					if( $result->num_rows() > 0 )
					{
						foreach( $result->result() as $fila )
						{
							$this->medicamento_agregar->modificar_med( $fila->codigo, $_POST["cant"] );
						}
						redirect("/");
					}else
					{
						$data = array('error' => TRUE);
						$this->load->view("Administrador/nuevo_med",$data);
					}					
				}else
				{
					$result = $this->medicamento_agregar->existe( $_POST["nom"], $_POST["lab"], $_POST["pres"] );
					if( $result->num_rows() > 0 )
					{
						foreach( $result->result() as $fila )
						{
							$this->medicamento_agregar->modificar_med( $fila->codigo, $_POST["cant"] );
						}						
					}else
					{
						//se inserta el medicamento:
						$this->medicamento_agregar->insertar_med(array('nombre' => $_POST["nom"],
																		'laboratorio' => $_POST["lab"],
																		'presentacion' => $_POST["pres"],
																		'stock_min'=> $_POST["smin"],
																		'stock_max' => $_POST["smax"],
																		'precio' => $_POST["precio"],
																		'cantidad' => $_POST["cant"],
																		'dosis' => $_POST["dosis"]
							));
					}
					$query = $this->medicamento_agregar->existe( $_POST["nom"], $_POST["lab"], $_POST["pres"] );
					foreach($query->result() as $fila)
					{
						$codigo = $fila->codigo;
					}

					//agregar lote
					$this->medicamento_agregar->agregar_lote($_POST["lote"],$_POST["cant"],$_POST["fecha_e"],$_POST["fecha_v"],$codigo);
					redirect("/");
				}


			}else
			{
				redirect("/");
			}	
		}
	};
?>