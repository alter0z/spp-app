<?php include "../header/header.php"; ?>

<!--**********************************
        Header start
    ***********************************-->
		<div class="header">
    <div class="header-content">
      <nav class="navbar navbar-expand">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="header-left">
            <div class="dashboard_bar">Data Wali Kelas</div>
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
              <li class="breadcrumb-item"><a href="../show/showdatawclass.php">Data Wali Kelas</a></li>
              <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Data Wali Kelas</a></li>
            </ol>
          </div>
          <!-- row -->
          <div class="row">
					<div class="col-xl-12 col-lg-24">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Add Data Wali Kelas</h4>
                </div>
                <div class="card-body">
                  <div class="basic-form">
                    <form method="post" action="">
                      <div class="row">
                        <div class="mb-3 col-md-6">
                          <label class="form-label">Fullname</label>
                          <input type="text" name="fullname" class="form-control" placeholder="John Doe" />
                        </div>
                        <div class="mb-3 col-md-6">
													<label class="form-label">Kelas</label>
                          <select id="inputState" name="class" class="default-select form-control wide">
														<option value="">Pilih Kelas</option>
														<option value="10-A">10-A</option>
														<option value="10-B">10-B</option>
														<option value="10-C">10-C</option>
														<option value="10-D">10-D</option>
														<option value="10-E">10-E</option>
														<option value="10-F">10-F</option>
														<option value="11-A">11-A</option>
														<option value="11-B">11-B</option>
														<option value="11-C">11-C</option>
														<option value="11-D">11-D</option>
														<option value="11-E">11-E</option>
														<option value="11-F">11-F</option>
														<option value="12-A">12-A</option>
														<option value="12-B">12-B</option>
														<option value="12-C">12-C</option>
														<option value="12-D">12-D</option>
														<option value="12-E">12-E</option>
														<option value="12-F">12-F</option>
                          </select>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </form>
										<?php include "../functions/get_add_wclass.php" ?>
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