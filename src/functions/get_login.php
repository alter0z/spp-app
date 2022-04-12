<?php
  include "../connection/connection.php";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
		
		if ($username == '' || $password == '') {
			echo "Form belum lengkap!! $role $username $password";
		} else {
			$login = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password' and role='$role'");
			$check = mysqli_num_rows($login);

			if ($check > 0) {
				session_start();
				$data = mysqli_fetch_assoc($login);

				if ($data['role'] == "admin") {
					$_SESSION['login'] = true;
					$_SESSION['fullname'] = $data['name'];
					$_SESSION['username'] = $username;
					$_SESSION['role'] = $role;

					header('location:../index/admin.php');
					// echo $role;
				} else if ($data['role'] == "walikelas") {
					$_SESSION['login'] = true;
					$_SESSION['username'] = $username;
					$_SESSION['role'] = $role;
					$_SESSION['wclass'] = $data['name'];

					header('location:../index/wclass.php');
					// echo $role;
				}
			} else {
				echo "Username dan Password anda Salah!!! $role $username $password";
			}
		}
	}
?>