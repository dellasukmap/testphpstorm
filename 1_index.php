<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
?>
<html>
<head><title>Della Sukma P-6701170047</title></head>
<body style="font-family: consolas;">
	<br><br><br><br><br><br>
	<center>
		<table style="border: solid thin #666; height: 250px; width: 300px;">
			<form action="2_proseslogin.php" method="post">
				<tr>
					<td colspan="2">
						<center>LOGIN</center>
					</td>
				</tr>
				<tr>
					<td>&nbspNIP</td>
					<td><input type="text" name="nip" style="width: 200px;"></td>
				</tr>
				<tr>
					<td>&nbspNama</td>
					<td><input type="text" name="nama" style="width: 200px;"></td>
				</tr>
				<tr>
					<td colspan="2"><br><center><input type="submit" name="submit" value="LogIn"></center></td>
				</tr>
				
		    </form>
		</table>
	</center>
</body>
</html>