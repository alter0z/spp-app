<?php 
  include "../connection/connection.php";

  if($_SERVER['REQUEST_METHOD']=='POST'){
		$nis 	= $_POST['nis'];
		$name 	= $_POST['studentname'];
		$class 	= $_POST['class'];
		$periode 	= $_POST['periode'];
		$cost 	= $_POST['sppcost'];
		$duedate = $_POST['duedate'];
		$status = $_POST['status'];

		if ($nis == '' || $name == '' || $class == '' || $duedate == ''){
			echo "Form belum lengkap...";
		} else {
			$save = mysqli_query($conn, "INSERT INTO student VALUES('$nis','$name','$class','$periode')");
			if (!$save) {
				echo "Penyimpanan data gagal..";
			} else {
				// $ds=mysqli_fetch_array(mysqli_query($konek, "SELECT idsiswa FROM siswa ORDER BY idsiswa DESC LIMIT 1"));
				// $idsiswa = $ds['idsiswa'];

				// //membuat tagihan (12 bulan dimulai dari Juli 2017 dan menyimpan tagihan di tabel spp
				// for($i=0; $i<12; $i++){
				// 	//membuat tanggal jatuh tempo nya setiap tanggal 10
				// 	$jatuhtempo = date("Y-m-d", strtotime("+$i month", strtotime($awaltempo)));

				// 	$bulan = $bulanIndo[date('m', strtotime($jatuhtempo))]." ".date('Y',strtotime($jatuhtempo));

				// 	mysqli_query($konek, "INSERT INTO spp(idsiswa,jatuhtempo,bulan,jumlah)
				// 				values('$idsiswa','$jatuhtempo','$bulan','$biaya')");
				mysqli_query($conn, "INSERT into spp values ('$nis','$duedate','$cost','$status')");
				header('location:../show/showdatastudent.php');
			}
		}
	}
?>