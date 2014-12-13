<?php	
	include('koneksi.php');
	
	$user_name = mysql_real_escape_string($_POST['username']);
	$password = md5(trim($_POST['password']));
	
	$query_cek_user = mysql_query("SELECT * FROM user WHERE user_name = '$user_name' AND password = '$password'")or die(mysql_errno());
	$deteksi_validitas = mysql_num_rows($query_cek_user);
	
	//Menyimpan data dalam array ['username'], ['password'], dst
	$data_login = mysql_fetch_array($query_cek_user);
	
	if($deteksi_validitas <= 0){
		header("Location:gagal_login.php");
		?>
			<script language="javascript">
				document.location.href = "gagal_login.php";
			</script>
		<?php
	}
	else {
			session_start();
			$_SESSION['nama_user'] = $data_login['user_name'];
			
			header("Location:index.php");
			?>
				<script language="javascript">
					document.location.href = "index.php";
				</script>
			<?php	
		}
?>