<?php 
        require '../modelos/modeloi.php';
        $obj_login = new login();

        if (isset($_POST['btnIniciar'])) 
        {
            $username = $_POST['txtUsuario'];
            $password = $_POST['txtContra'];
            $usuario = $obj_login->buscar($username, $password);
            

            if ($usuario[0][0]>0) 
            {
                $SESSION['privilegio'] = $usuario[0][3];
                if ($SESSION['privilegio']== 'Admin') {
                    echo '<script>alert("Bienvenido");</script>';
                    header("Location: controladorA.php");
                }
                else if ($SESSION['privilegio']== 'Cliente') {
                    echo '<script>alert("Bienvenido");</script>';
                    header("Location: controladorC.php");
                }
            }
           
            else
            {
                echo '<script>alert("¡Usuario no registrado!");</script>';
            }
        }
        
        require '../vistas/inicio.php'
     ?>