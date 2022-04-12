<?php
	session_start();
	if (!isset($_SESSION['login'])) {
		header('location:../auth/login.php');
	} /*else if (isset($_SESSION['login']) && isset($_SESSION['role']) == "admin") {
		header('location:../index/admin.php');
	}*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pembayaran SPP</title>
</head>
<body>
<h3>Aplikasi Pembayaran SPP</h3>
<hr/>
<a href="../index/wclass.php">Dashboard</a> |
<a href="../show/showdatastudent.bywclass.php">Data Siswa</a> |
<a href="../auth/logout.php">Logout</a>
<hr/>