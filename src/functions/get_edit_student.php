<?php 
  include "../connection/connection.php";

  // SET FOREIGN_KEY_CHECKS=0; -- to disable them
  // SET FOREIGN_KEY_CHECKS=1; -- to re-enable them

  if($_SERVER['REQUEST_METHOD']=='POST'){
		$nis 	= $_POST['getnis'];
		$name 	= $_POST['studentname'];
		$class 	= $_POST['class'];
		$periode 	= $_POST['periode'];
		$cost 	= $_POST['sppcost'];
		$duedate = $_POST['duedate'];

		if ($nis == '' || $name == '' || $class == '' || $duedate == ''){
			echo "Form belum lengkap...";
		} else {
      mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0");
      $update = mysqli_query($conn, "UPDATE student set nis='$nis', student_name='$name', class='$class', periode='$periode' where nis='$_GET[nis]'");

			if (!$update) {
				echo "Penyimpanan data gagal..";
			} else {
				mysqli_query($conn, "UPDATE spp set nis='$nis', duedate='$duedate', spp_cost='$cost' where nis='$_GET[nis]'");
				header('location:../show/showdatastudent.php');
			}
		}
	}
?>