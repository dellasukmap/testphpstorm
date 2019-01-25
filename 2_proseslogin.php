<?php 

    session_start();
     
     include 'koneksi.php';
     

    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $data = mysqli_query($con ,"select * from Karyawan where NIP='$nip' AND Nama ='$nama'");
     
    $cek = mysqli_num_rows($data);
    if($cek > 0){
      $row_akun = mysqli_fetch_row($data);
      $_SESSION['NIP'] = $row_akun['0'];
      $_SESSION['Nama'] = $row_akun['1'];
      header("location:3_tampil.php");
      //echo "haalo";
    }else{
      header("location:1_index.php?pesan=gagal");
    }

?>