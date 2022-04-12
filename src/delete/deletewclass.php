<?php
	session_start();
	if(isset($_SESSION['login'])){
		include "../connection/connection.php";
		$delete = mysqli_query($conn, "DELETE FROM wclass WHERE class='$_GET[class]'");
		
		if (!$delete) {
			echo "Hapus data gagal, atau data sedang digunakan di tabel lain...<br/>
			<a href='../show/showdatawclass.php'>Kembali</a>";	
		}else{
			header('location:../show/showdatawclass.php');
		}
	} else {
		echo "Anda tidak memiliki akses ke halaman ini!!! <br> <a href='../index/admin.php'>Kembali</a>";
	}
?>