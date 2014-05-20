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
			if( $_POST )
			{
				$this->load->model('medicamento_model');
				
				if( $this->medicamento_model->comprobar_cantidad($_POST["codigo"], $_POST["cant1"]))
				{
					$this->medicamento_model->borrar($_POST["codigo"], $_POST["cant1"]);

				redirect('/');

				}else
				{
					$this->mostrar();
				}

			}else
			{
				redirect('/');
			}
		}
	};
?>