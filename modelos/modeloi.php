<?php 

    require '../bd/conexion_bd.php';

    class login extends BD_PDO
    {
        
        function buscar($username, $password)
        {
            $usuarios = $this->Ejecutar_Instruccion("select * from usuarios where username ='$username' and password='$password'");
            return $usuarios;
        }
    }

 ?>