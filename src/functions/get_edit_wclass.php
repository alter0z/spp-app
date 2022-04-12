<?php 
  include "../connection/connection.php";

  // SET FOREIGN_KEY_CHECKS=0; -- to disable them
  // SET FOREIGN_KEY_CHECKS=1; -- to re-enable them

  if($_SERVER['REQUEST_METHOD']=='POST'){
		$name 	= $_POST['fullname'];
		$class 	= $_POST['class'];

		if ($name == '' || $class == '') {
			echo "Form belum lengkap...";
		} else {
      mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0");
      $update = mysqli_query($conn, "UPDATE wclass set fullname='$name', class='$class' where class='$_GET[class]'");

			if (!$update) {
				echo "Penyimpanan data gagal..";
			} else {
				header('location:../show/showdatawclass.php');
			}
		}
	}
?>