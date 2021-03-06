<?php require_once('conexion.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Tecnored.co">

    <title>Registro de Clientes-Hotel Boyacá Plaza x</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/datepicker.css">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>
    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Bootstrap datepicker js -->
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/ajax.js"></script>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">Principal</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://hotelboyacaplaza.co/">Pagina Web</a>
                    </li>
                    <li>
                        <a href="#">Facturacion</a>
                    </li>
                    <li>
                        <a href="../registro.php">Nuevo Cliente</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Registro de Clientes</h1>
                <!-- <p class="lead">Hotel Boyaca Plaza</p>-->
                <img src="../img/logo.png" height="110" width="290">
            </div>
        </div>
        
       <div class="form center">
            <a href="javascript:history.back(1);">Volver</a>
       </div>
        <div class="pager" id="resultados">
		<?php 
        $nom=$_POST['Nombre'];
        $doc=$_POST['Documento'];
        $tipo=$_POST['tipodoc'];
        $dedoc=$_POST['de_doc'];
        #$de=$_POST['de_doc'];
        $nac=$_POST['Nacionalidad'];
        $fn=$_POST['F_nacimiento'];
		#$doc=$_POST['Documento'];
		$prov=$_POST['procedencia'];
		$des=$_POST['destino'];
		$res=$_POST['dir_residencia'];
		$city=$_POST['ciudad_residencia'];
        $pais=$_POST['pais_residencia'];
		$tel=$_POST['telefono'];
		$mail=$_POST['email'];
        $oc=$_POST['ocupacion'];
        $em=$_POST['empresa'];
        $nit=$_POST['nit'];
        $nota=$_POST['nota'];


		#$consulta= " UPDATE clientes SET procedencia=$prov,destino=$des,dir_residencia=$res,ciudad_residencia=$city,telefono=$tel,email=$mail WHERE 'Documento' =. $_POST('Documento' ";


		$consulta= "UPDATE clientes set ";
        $consulta .= "Nombre='" . $_POST["Nombre"] . "', ";
        $consulta .= "Documento='" . $_POST["Documento"] . "', ";
        $consulta .= "tipodoc='" . $_POST["tipodoc"] . "', ";
        $consulta .= "de_doc='" . $_POST["de_doc"] . "', ";
        $consulta .= "Nacionalidad='" . $_POST["Nacionalidad"] . "', ";
        $consulta .= "F_nacimiento='" . $_POST["F_nacimiento"] . "', ";
		$consulta .= "procedencia='" . $_POST["procedencia"] . "', ";
		$consulta .= "destino='" . $_POST["destino"] . "', ";
		$consulta .= "dir_residencia='" . $_POST["dir_residencia"] . "', ";
		$consulta .= "ciudad_residencia='" . $_POST["ciudad_residencia"] . "', ";
        $consulta .= "pais_residencia='" . $_POST["pais_residencia"] . "', ";
		$consulta .= "telefono='" . $_POST["telefono"] . "', ";
        $consulta .= "ocupacion='" . $_POST["ocupacion"] . "', ";
        $consulta .= "empresa='" . $_POST["empresa"] . "', ";
        $consulta .= "nit='" . $_POST["nit"] . "', ";
        $consulta .= "nota='" . $_POST["nota"] . "', ";
		$consulta .= "email='" . $_POST["email"] . "' ";
		$consulta .= "where Documento= ".$doc."";


		if(mysqli_query($conect,$consulta)){
		echo "<h3>Cliente actualizado con exito!</h3>";
		}else{ print "Error : ". mysqli_error($conect); 
		            exit(); 
		     }

		 ?>
        </div>
        <div class="pager"><a href="../registro.php"><input type="text" class="btn btn-primary" value="Registrar nuevo cliente"></a>
                                <a href="../index.php"><input type="text" class="btn btn-primary" value="Imprimir registro"></a></div>
    </div>
</body>
   
</html>