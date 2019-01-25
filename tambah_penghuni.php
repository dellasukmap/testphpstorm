<?php
	include "koneksi.php";
?>
<html>
<head>
	<title>INPUT DATA PENGHUNI
	</title>
</head>
<body>
	<form method="post">
		<table>
			
			<tr>
				<td>No KTP</td><td>:</td>
				<td><input type="text" name="noktp"></td>
					
			</tr>
			<tr>
				<td>Nama</td><td>:</td>
				<td><input type="text" name="nama"></td>
					
			</tr>
			<tr>
				<td>Unit</td><td>:</td>
				<td><input type="text" name="unit"></td>
					
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
	$nama = $_POST['nama'];
	$ktp = $_POST['noktp'];
	$unit = $_POST['unit'];
	
	
				$query= "INSERT INTO Penghuni (No_KTP,Nama,Unit) VALUES ('$ktp','$nama','$unit')";
			
			$hasil = mysqli_query($con,$query);
			if($hasil){
				header("Location:3_tampil.php");
			}else{
				echo "data gagal diinput";
			}
	
	
}
?>

