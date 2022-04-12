<?php
  include "../connection/connection.php";
  
  if( $_SERVER['REQUEST_METHOD']=='POST') {
		
		$nis = mysqli_real_escape_string($conn, $_POST['nis']);
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$class = mysqli_real_escape_string($conn, $_POST['class']);
		$wclass = mysqli_real_escape_string($conn, $_POST['wclass']);
		$statues = mysqli_real_escape_string($conn, $_POST['statues']);
		
		if ($statues == null) {
			echo "Form belum lengkap!!!";
		} else {
			$save = mysqli_query($conn, "INSERT INTO Transaction VALUES ('$nama')");
    
      if (!$save) {
        echo "Simpan data gagal!!";
        } else {
        header('location:tampil_guru.php');
      }
		}
	}
?>