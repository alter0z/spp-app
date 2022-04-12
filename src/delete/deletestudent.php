<?php
	session_start();
	if(isset($_SESSION['login'])){
		include "../connection/connection.php";
		mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0");
		$delete = mysqli_query($conn, "DELETE FROM student WHERE nis='$_GET[nis]'");
		
		if (!$delete) {
			echo "Hapus data gagal, atau data sedang digunakan di tabel lain...<br/>
			<a href='../show/showdatastudent.php'>Kembali</a>";	
		}else{
			mysqli_query($conn, "DELETE FROM spp WHERE nis='$_GET[nis]'");
			header('location:../show/showdatastudent.php');
		}
	} else {
		echo "Anda tidak memiliki akses ke halaman ini!!! <br> <a href='../index/admin.php'>Kembali</a>";
	}
?>