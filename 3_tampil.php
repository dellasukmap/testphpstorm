<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Paket
	</title>
</head>
<body>
	<center>
		<br><br><br>
		<h3>TABEL DATA PAKET</h3>

</body>
</html>
<?php
session_start();
  $nip = $_SESSION['NIP'];
  $nama = $_SESSION['Nama'];
include "koneksi.php";
echo "Hallo $nama - $nip | <a href='4_tambahpaket.php'>Tambah Paket</a> | <a href='tambah_penghuni.php'>Tambah Penghuni</a> | <a href='logout.php'>LOGOUT</a><br><table border='1' style='border: solid thin #666'>";
      
      echo "<th>ID Paket</th>
      		<th>Tgl Datang</th>
      		<th>Sasaran</th>
      		<th>Penerima</th>
      		<th>Isi Paket</th>
      		<th>Tanggal Ambil</th>
          <th>Status</th>
      		<th>Aksi</th>

      ";

	 $sql = "SELECT * FROM PAKET";
	  
	   $result = $con->query($sql);

	      if ($result->num_rows > 0) {
      
      
        while($row = $result->fetch_assoc()) {

        echo "<tr >";
       	echo "<td style='border: solid thin #666'>".$row['Id_Paket']."</td>";
    		echo "<td style='border: solid thin #666'>".$row['Tgl_Datang']."</td>";
    		echo "<td style='border: solid thin #666'>".$row['Sasaran']."</td>";
    		echo "<td style='border: solid thin #666'>".$row['Penerima']."</td>";
    		echo "<td style='border: solid thin #666'>".$row['Isi_Paket']."</td>";
    		echo "<td style='border: solid thin #666'>".$row['Tgl_Terima']."</td>";
        if($row['Tgl_Terima']=='0000-00-00'){
          echo "<td style='border: solid thin #666'>Belum Diambil</td>";
        }else{
           echo "<td style='border: solid thin #666'>Sudah Diambil</td>";
        }
       
            	 echo "<td style='border: solid thin #666'><a href='edit(1).php?id=".$row['Id_Paket']."'>Edit</a></td>";
        echo "</tr>";   
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $con->close();

?>
</center>