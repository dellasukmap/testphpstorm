<?php
	include "koneksi.php";
?>
<html>
<head>
	<title>INPUT DATA PAKET
	</title>
</head>
<body>
	<form method="post">
		<table>
			
			<tr>
				<td>Sasaran</td><td>:</td>
				<td><select name="sasaran">
					<?php
						$sql = "SELECT * FROM Penghuni";
						 $result = mysqli_query($con,$sql);

					        while($row = mysqli_fetch_array($result)) {
					        	echo "<option value='".$row['No_KTP']."'>".$row['No_KTP'].".". $row['Nama']."</option>";
					        }
					       
					   
					 ?>
				</select></td>
			</tr>

			<tr>
				<td>Isi Paket</td><td>:</td>
				<td><textarea name="isi_paket" ></textarea></td>
			</tr>
			<tr>
				<td colspan="3">
						<input type="submit" name="submit" value="INPUT">
				</td>
			</tr>
		</table>
	
		<a href="3_tampil.php">Back</a>
	</form>
</body>
</html>

<?php
if (isset($_POST['submit'])){
	date_default_timezone_set('Asia/Jakarta');
	session_start();
	  $nip = $_SESSION['NIP'];
	  $nama = $_SESSION['Nama'];
	$tgl_dtg 		= date("Y-m-d");
	$sasaran 		= $_POST['sasaran'];
	$penerima	    = $nip;
	$isi_paket		= $_POST['isi_paket'];
	
	
				$query= "INSERT INTO paket(Tgl_Datang,Sasaran,Penerima,Isi_Paket) VALUES ('$tgl_dtg','$sasaran','$penerima','$isi_paket')";
			
			$hasil = mysqli_query($con,$query);
			if($hasil){
				header("Location:3_tampil.php");
			}else{
				echo "data gagal diinput";
			}
	
	
}
?>

