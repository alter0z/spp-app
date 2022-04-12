<?php include "../header/header.php"; ?>

<?php
	include "../connection/connection.php";

	$getData = mysqli_query($conn, "SELECT * FROM student WHERE nis='$_GET[nis]'");
	$data = mysqli_fetch_array($getData);

	$getDataSpp = mysqli_query($conn, "SELECT * FROM spp WHERE nis='$_GET[nis]'");
	$dataSpp = mysqli_fetch_array($getDataSpp);
?>

<!--**********************************
        Header start
    ***********************************-->
		<div class="header">
    <div class="header-content">
      <nav class="navbar navbar-expand">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="header-left">
            <div class="dashboard_bar">Data Siswa</div>
          </div>
          <ul class="navbar-nav header-right">
            <li class="nav-item">
              <div class="input-group search-area">
                <input type="text" class="form-control" placeholder="Search here..." />
                <span class="input-group-text"
                  ><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a
                ></span>
              </div>
            </li>
            <li class="nav-item">
              <a href="../auth/logout.php" class="btn btn-primary d-sm-inline-block d-none">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

	<!--**********************************
            Content body start
        ***********************************-->
			<div class="content-body">
        <div class="container-fluid">
          <div class="row page-titles">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../index/admin.php">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="../show/showdatastudent.php">Data Siswa</a></li>
              <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Data Siswa</a></li>
            </ol>
          </div>
          <!-- row -->
          <div class="row">
					<div class="col-xl-12 col-lg-24">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Edit Data Siswa</h4>
                </div>
                <div class="card-body">
                  <div class="basic-form">
                    <form method="post" action="">
                      <div class="row">
                        <div class="mb-3 col-md-6">
                          <label class="form-label">NIS</label>
                          <input type="number" name="getnis" class="form-control" maxlength="6" value="<?php echo $data['nis']; ?>" placeholder="NIS ex: 2212345xxx" />
                        </div>
                        <div class="mb-3 col-md-6">
                          <label class="form-label">Nama</label>
                          <input type="text" name="studentname" class="form-control" value="<?php echo $data['student_name']; ?>" placeholder="Nama Siswa ex: Ratna Permata" />
                        </div>
                        <div class="mb-3 col-md-6">
													<label class="form-label">Kelas</label>
                          <select id="inputState" name="class" class="default-select form-control wide">
													<?php
														include "../connection/connection.php";

														$getDatac = mysqli_query($conn, "SELECT * from wclass order by class ASC");
														while($datac = mysqli_fetch_array($getDatac)){

															if($datac['class'] == $data['class']){
																$selected = "selected";
															}else{
																$selected ="";
															}

													?>
														<option value="<?php echo $datac['class']; ?>" <?php echo $selected; ?>><?php echo $datac['class']; ?></option>
													<?php
														}
													?>
                          </select>
                        </div>
												<div class="mb-3 col-md-6">
                          <label class="form-label">Tahun Ajaran</label>
                          <input type="text" name="periode" class="form-control" value="<?php echo $data['periode']; ?>" readonly />
                        </div>
												<div class="mb-3 col-md-6">
													<label class="form-label">Biaya</label>
													<input type="text" name="sppcost" class="form-control" value="<?php echo $dataSpp['spp_cost']; ?>" readonly />
												</div>
												<div class="mb-3 col-md-6">
													<label class="form-label">Jatuh Tempo</label>
													<input type="date" name="duedate" class="form-control" value="<?php echo $dataSpp['duedate']; ?>" />
												</div>
												<div class="mb-3 col-md-6">
													<label class="form-label" style="display: none;">Status</label>
													<input type="text" name="status" style="display: none;" class="form-control" value="<?php echo $dataSpp['status']; ?>" readonly />
												</div>
                      </div>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </form>
										<?php include "../functions/get_edit_student.php"; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--**********************************
            Content body end
        ***********************************-->

<?php include "../footer/footer.php" ?>