<?php
	include('session.php');
	$uid=$_GET['id'];

	$c=mysqli_query($mysqli,"select * from clientes where user_id='$uid'");
	$cliente=mysqli_fetch_array($c);

	$name= $_POST['cname'];
	$direccion= $_POST['direccion'];
	$telefono= $_POST['telefono'];

	$fileInfo = PATHINFO($_FILES["image"]["name"]);

	if (empty($_FILES["image"]["name"])){
		$location=$cliente['foto'];
	}else{
		if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png") {
			$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
			move_uploaded_file($_FILES["image"]["tmp_name"], "../public/img-clientes/" . $newFilename);
			$location = "public/img-clientes/" . $newFilename;
		}
		else{
			$location=$cliente['foto'];
			?>
				<script>
					window.alert('Foto no cargada. Por favor carga fotos en formato JPG o PNG solamente!');
				</script>
			<?php
		}
	}
	mysqli_query($mysqli,"update clientes set name='$name', direccion='$direccion', telefono='$telefono', foto='$location' where user_id='$uid'");
	$_SESSION['nameUser']=$name;
	$_SESSION['foto']=$location;
	?>
		<script>
			window.alert('Su perfil ha sido actualizado!');
			window.history.back();
		</script>
	<?php
	
?>