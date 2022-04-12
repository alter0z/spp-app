<?php include "../header/headerw.php"; ?>

<h3>Data Siswa</h3>
<a href="../add/addstudent.php">Tambah Data</a>
<table border="1">
	<tr>
		<th>No.</th>
		<th>NIS</th>
		<th>Nama Siswa</th>
		<th>Kelas</th>
		<th>Wali Kelas</th>
		<th>Tahun Ajaran</th>
		<th>Jatuh tempo</th>
		<th>Biaya</th>
		<th>Status</th>
	</tr>

	<?php 
		include "../connection/connection.php";

		$getWclas = $_SESSION['wclass'];

		$getData = mysqli_query($conn,"SELECT a.*, b.fullname, c.* FROM student as a inner join wclass as b on a.class = b.class right join spp as c on a.nis = c.nis where b.fullname = '$getWclas' order by a.student_name asc");

		$no=1;
		while($data = mysqli_fetch_array($getData)){
			echo "<tr>
				<td>$no</td>
				<td>$data[nis]</td>
				<td>$data[student_name]</td>
				<td>$data[class]</td>
				<td>$data[fullname]</td>
				<td>$data[periode]</td>
				<td>$data[duedate]</td>
				<td>$data[spp_cost]</td>
				<td>$data[status]</td>
			</tr>";
			$no++;
		}
	?>
</table>

<p>Menghapus siswa berarti juga menghapus tagihan siswa...</p>

<?php include "../footer/footer.php"; ?>