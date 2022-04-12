<?php include "../header/header.php"; ?>

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
              <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Data Siswa</a></li>
            </ol>
          </div>
          <!-- row -->
          <div class="row">
					<div class="col-xl-12 col-lg-24">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Add Data Siswa</h4>
                </div>
                <div class="card-body">
                  <div class="basic-form">
                    <form method="post" action="">
                      <div class="row">
                        <div class="mb-3 col-md-6">
                          <label class="form-label">NIS</label>
                          <input type="number" name="nis" class="form-control" maxlength="6" placeholder="NIS ex: 2212345xxx" />
                        </div>
                        <div class="mb-3 col-md-6">
                          <label class="form-label">Nama</label>
                          <input type="text" name="studentname" class="form-control" placeholder="Nama Siswa ex: Ratna Permata" />
                        </div>
                        <div class="mb-3 col-md-6">
													<label class="form-label">Kelas</label>
                          <select id="inputState" name="class" class="default-select form-control wide">
														<option value="">Pilih Kelas</option>
														<?php
															include "../connection/connection.php";
															$getClass = mysqli_query($conn, "SELECT class from wclass order by class asc");
															while($data = mysqli_fetch_array($getClass)){
														?>
																<option value="<?php echo $data['class']; ?>"><?php echo $data['class']; ?></option>
														<?php
															}
														?>
                          </select>
                        </div>
												<div class="mb-3 col-md-6">
                          <label class="form-label">Tahun Ajaran</label>
                          <input type="text" name="periode" class="form-control" value="2021-2022" readonly />
                        </div>
												<div class="mb-3 col-md-6">
													<label class="form-label">Biaya</label>
													<input type="text" name="sppcost" class="form-control" value="250000" readonly />
												</div>
												<div class="mb-3 col-md-6">
													<label class="form-label">Jatuh Tempo</label>
													<input type="date" name="duedate" class="form-control" />
												</div>
												<div class="mb-3 col-md-6">
													<label class="form-label " style="display: none;">Status</label>
													<input type="text" name="status" style="display: none;" class="form-control" value="Belum Lunas" readonly />
												</div>
                      </div>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </form>
										<?php include "../functions/get_add_student.php"; ?>
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

<?php include "../footer/footer.php"; ?>