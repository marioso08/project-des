<?php

	include('session.php');
	
	$cpass=md5($_POST['cpass']);
	$repass=md5($_POST['repass']);
	
	if($cpass!=$repass){
		?>
		<script>
			window.alert('Required passwords did not match. Account not updated!');
			window.history.back();
		</script>
		<?php
	}
	elseif($cpass!=$srow['password']){
		?>
		<script>
			window.alert('Current password did not match. Account not updated!');
			window.history.back();
		</script>
		<?php
	}
	else{
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		if($password==$srow['password']){
			$fipassword=$password;
		}
		else{
			$fipassword=md5($password);
		}
		mysqli_query($mysqli,"update clientes set email='$email, password='$fipassword' where user_id='".$_SESSION['id']."'");
		mysqli_query($mysqli,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Update account',NOW())");
		?>
		<script>
			window.alert('Cuenta acrualizada con Exito!');
			window.history.back();
		</script>
		<?php
	}
		
?>