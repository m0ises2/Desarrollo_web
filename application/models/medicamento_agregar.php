<?php
	class Medicamento_agregar extends CI_Model
	{
		function existe( $dato1, $dato2, $dato3 )
		{	
			return ($this->db->get_where("medicamento", array('nombre' => $dato1, 'laboratorio' => $dato2, 'presentacion' => $dato3)));
		}

		function existe_lote( $lote )
		{
			return ($this->db->get_where("principal", array('num_lote' => $lote))->num_rows() > 0);
		}

		function agregar_lote( $num_lote, $cantidad, $fecha1, $fecha2, $codigo_med )
		{
			$data = array(
							'num_lote' => $num_lote,
							'cantidad' => $cantidad,
							'fecha_f' => $fecha1,
							'fecha_v' => $fecha2,
							'codigo_med' => $codigo_med
						);
			$this->db->insert('principal', $data);
		}

		function modificar_med( $codigo, $cantidad )
		{
			$query = $this->db->get_where('medicamento', array('codigo' => $codigo));

			foreach($query->result() as $fila)
			{
				$cant = $cantidad + $fila->cantidad;
			}

			$this->db->query('UPDATE medicamento SET cantidad = '.$cant.' WHERE codigo = '.$codigo);
		}

		function insertar_med($datos)
		{
			$this->db->insert('medicamento', $datos); 
		}
	};
?>