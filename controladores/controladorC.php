<?php 
    
    @$datoBuscar = $_POST['txtNombre'];

    require '../modelos/modeloC.php';

    $obj_prod = new cliente();

    $result = $obj_prod->buscar($datoBuscar);

    
    require '../vistas/indexc.php';

?>