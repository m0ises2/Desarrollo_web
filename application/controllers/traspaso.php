<?php
	class Traspaso extends CI_Controller
	{
	
		function index()
		{
			$this->load->model('medicamento_model');
			$data = $this->medicamento_model->obt_medicamentos();
			$data2 = $this->medicamento_model->obt_unidosis();
			
			$uni = array();
					
			foreach( $data2->result() as $fila2 )
			{
				$uni[$fila2->codigo_med] = $fila2->cantidad_dosis;
			}
			
			$data = array('medicamento' => $data,
							'unidosis' => $uni);
			
			$this->load->view("Ventas/vista_traspaso",$data);
			
		}

		function operar()
		{
			$this->load->model("medicamento_model");

			if($_POST)
			{
				if(!isset($_POST["seleccionados"]))
				{
					redirect("index.php/traspaso");
				}

				if( $_POST["uc1"] == $_POST["ud1"] )
				{
					$data2 = $this->medicamento_model->obt_unidosis();
			
					$uni = array();
							
					foreach( $data2->result() as $fila2 )
					{
						$uni[$fila2->codigo_med] = $fila2->cantidad_dosis;
					}

					$error = array(
							'error' => TRUE,
							'medicamento' => $this->medicamento_model->obt_medicamentos(),
							'unidosis' => $uni
						);
					$this->load->view("Ventas/vista_traspaso",$error);

				}else
				{
					if( $_POST["uc1"] == "principal" && $_POST["ud1"] == "unidosis")
					{
						for ($i=0; $i < count($_POST["seleccionados"]); $i++)
						{ 
							if( ($this->medicamento_model->obt_cantidad($_POST["seleccionados"][$i]) > 0) && $this->medicamento_model->comprobar_cantidad($_POST["seleccionados"][$i],$_POST["cant1"]) )
							{
								$query2 = $this->medicamento_model->obt_cantidad_dosis($_POST["seleccionados"][$i]);  
									
								foreach ($query2->result() as $fila2) {
									$cantidad_dosis = $fila2->dosis;
								}

								$dosis = $_POST["cant1"] * $cantidad_dosis;

								$this->medicamento_model->borrar($_POST["seleccionados"][$i],$_POST["cant1"]);
								$this->medicamento_model->actualizar_unidosis($_POST["seleccionados"][$i],$dosis,
														   $this->medicamento_model->existe_unidosis($_POST["seleccionados"][$i]));
							}
						}				
					}

					if($_POST["uc1"] == "principal" && $_POST["ud1"] == "publico")
					{
						for ($i=0; $i < count($_POST["seleccionados"]); $i++)
						{ 
							if( $this->medicamento_model->comprobar_cantidad($_POST["seleccionados"][$i],$_POST["cant1"]) )
							{								
								$this->medicamento_model->borrar($_POST["seleccionados"][$i],$_POST["cant1"]);								
							}
						}
					}

					if($_POST["uc1"] == "unidosis" && $_POST["ud1"] == "publico")
					{
						for ($i=0; $i < count($_POST["seleccionados"]); $i++)
						{
							if( $this->medicamento_model->comprobar_cantidad_dosis($_POST["seleccionados"][$i],$_POST["cant1"]) )
							{								
								$this->medicamento_model->borrar_unidosis($_POST["seleccionados"][$i],$_POST["cant1"]);								
							}
						}						
					}
					redirect("/");
				}
				
			}else
			{
				redirect("/");
			}
		}
	};