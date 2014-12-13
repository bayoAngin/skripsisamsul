<?php
	include('koneksi.php');
	
	if(isset ($_POST["username"]) && isset ($_POST["password"]) 
				&& strcmp($_POST["username"], "") 
				&& strcmp($_POST["password"], "")){
		
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$password = md5(trim($_POST['password']));
		
		$sql_daftar = "INSERT INTO user(user_name, password) VALUES('".$_POST['username']."', '".$password."' )";
		$hasil = mysql_query($sql_daftar) or die(mysql_error());
		
		if($hasil == 0){
			header("Location:daftar.php");
		} else {
			header("Location:login2.php");	
		}
		
		} else {
				?> 
					<script language="javascript">
						alert("Form tidak boleh ada yang kosong!");
						document.location.href = "daftar.php";
					</script>
				<?php
		}
?>