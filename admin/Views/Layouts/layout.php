<?php 
require ('Views/User/login.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Crud PHP</title>
	<meta charset="utf-8">
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet"> 

<!-- MetisMenu CSS -->
<link href="css/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/startmin.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"> 

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">

	
</head>
<body>
	<header>
	<div id="wrapper">
		<?php require_once('cabecera.php'); ?>
		<!-- Page Content -->
		<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            
							<section class="page-header">
							<?php //session_star();
							if(isset($_SESSION['usuario'])){ 
							require_once('routes.php');
							}else{
								header('Location: Views/User/index.php');
							} ?>
							</section>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
	</div>
	</header>
	
	<!-- Compiled and minified JavaScript -->
	<!--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>-->
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote1').summernote();
		$('#summernote2').summernote();
		$('#summernote3').summernote();
    });
  </script>
</body>
</html>