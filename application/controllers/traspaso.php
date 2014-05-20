<?php
	class Traspaso extends CI_Controller
	{
	

		function index()
		{
			$this->load->model('medicamento_model');
			$data = $this->medicamento_model->obt_medicamentos();
			$data = array('medicamento' => $data );
					
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
					$error = array(
							'error' => TRUE,
							'medicamento' => $this->medicamento_model->obt_medicamentos()
						);
					$this->load->view("Ventas/vista_traspaso",$error);
				}else
				{
					if( $_POST["uc1"] == "principal" && $_POST["ud1"] == "unidosis")
					{
						/*
							Debo tomar la cantidad de medicamentos que piden traspasar,
							luego chequear que tengo la cantidad disponible de TODOS los medicamentos para poder traspasar,
							luego, una vez chequeado eso, debo multiplicar la cantidad a traspasar por la dosis de cada uno, 
							para así poder crear las N entradas en la tabla unidosis.

							P.D: Si alguno de lo medicamentos no llegase a tener disponible la cantidad para traspasar, entonces 
							simplemente se obviaria dicho medicamento, es decir, se haría el proceso para el resto
							de los medicamentos a traspasar.
						*/
					}else
					{

					}
				}
			}else
			{
				redirect("/");
			}
		}

		function traspasar()
		{

		}
	};

	/*
				for ($i=0; $i < count($_POST["seleccionados"]); $i++) { 
					echo $_POST["seleccionados"][$i]." ";
				}
				echo "Cedente: ". $_POST["uc1"]." ";
				echo "Destino: ". $_POST["ud1"];
				*/
?>