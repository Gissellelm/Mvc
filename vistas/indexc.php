<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>G&F</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
          <script>
        function caracter()
        {
            var nombre = document.getElementById("nombre").value;

            if (nombre.length >= 20) 
            {
                alert("Límite de caracteres excedido");
                return false;
            }
            return true;
        }

        
        function eliminar(id)
        {
            if (confirm("¿Estás seguro de eliminar el registro?"))
            {
                window.location = "../controladores/controladorA.php?id_eliminar=" + id;
            }
        }


        function modificar(id)
        {
            window.location = "../controladores/controladorA.php?id_mod=" + id;
        }
        function cerrar()
        {
            if (confirm("¿Quieres cerrar sesión?")) 
            {
                window.location = "../cerrar.php"
            }
        }

        function texto(e)
        {
            var code; 
            if (!e) var e = window.event;
            if(e.keyCode) code = e.keyCode;
            else if (e.which) code =e.which;
            var character = String.fromCharCode(code);
            var AllowRegex = /^[\ba-zA-Z\s-]$/;
            if (AllowRegex.test(character)) return true;
            return false;
        }
    
    </script>
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">coffe</span>
                <span class="site-heading-lower">&</span>
                <span class="site-heading-upper text-primary mb-3">brown</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="../controladores/controladorC.php">Home</a></li>
                 
                        <input type="button"  id="btncerrarsesion" name="btncerrarsesion" value="Cerrar Sesion" onclick="javascript: cerrar();">
                    </ul>

                </div>
            </div>
        </nav>
        <section class="page-section clearfix">
            <div class="container" align="center">
                <div class="intro">
                 
                    
                    <form id="frmBuscar" name="frmBuscar" action="../controladores/controladorA.php" method="post">
                    <div class="row">
                        <span>
                        <input class="form-control-right " id="txtNombre" name="txtNombre" type="text" placeholder="Buscar" style="padding-top: 5px;padding-bottom: 5px;padding-right: 10px;padding-left: 10px;width: 274px;" onkeypress="return Vbuscar();" /><br><br>
                        <input type="submit" id="btnBuscar"  name="btnBuscar" class="btn btn-secondary" value="Buscar"><br><br>
                    </div>
                </form>

                    <div class="row">
                 <table class="table table-dark table-sm table-striped" align="center">
                    <tr>
                        <td align="center">Id del Producto</td>
                        <td align="center">Nombre</td>
                        <td align="center">Cantidad</td>
                        <td align="center">Precio</td>
                      
                    <?php foreach (@$result as $renglon) {
                     ?>
                    <tr>
                        <td align="center"><?php echo $renglon[0]; ?></td>
                        <td align="center"><?php echo $renglon[1]; ?></td>
                        <td align="center"><?php echo $renglon[2]; ?></td>
                        <td align="center"><?php echo $renglon[3]; ?></td>                       
                    </tr>
                    <?php } ?>
                </table>
            </div><br>
           
            </div>
        </section>
        
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
