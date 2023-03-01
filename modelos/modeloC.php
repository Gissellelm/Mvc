<?php 
	
	require '../bd/conexion_bd.php';

   

    class cliente extends BD_PDO 
    {

    	function buscar($datoBuscar)
    	{
    		$result = $this->Ejecutar_Instruccion("select * from productos where nombre like '%$datoBuscar%'");
    		return $result;

    	}
	}		
 ?>