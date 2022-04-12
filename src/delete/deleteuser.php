<?php
	session_start();
	if(isset($_SESSION['login'])){
		include "../connection/connection.php";
		$delete = mysqli_query($conn, "DELETE FROM user WHERE username='$_GET[username]'");
		
		if (!$delete) {
			echo "Hapus data gagal, atau data sedang digunakan di tabel lain...<br/>
			<a href='../show/showdatauser.php'>Kembali</a>";	
		}else{
			header('location:../show/showdatauser.php');
		}
	} else {
		echo "Anda tidak memiliki akses ke halaman ini!!! <br> <a href='../index/admin.php'>Kembali</a>";
	}
?>