<?php include "../header/header.php"; ?>

<?php
	include "../connection/connection.php";

	$getData = mysqli_query($conn, "SELECT * FROM user WHERE username='$_GET[username]'");
	$data = mysqli_fetch_array($getData);
?>

<!--**********************************
        Header start
    ***********************************-->
		<div class="header">
    <div class="header-content">
      <nav class="navbar navbar-expand">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="header-left">
            <div class="dashboard_bar">Data User</div>
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
              <li class="breadcrumb-item"><a href="../show/showdatauser.php">Data User</a></li>
              <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Data User</a></li>
            </ol>
          </div>
          <!-- row -->
          <div class="row">
					<div class="col-xl-12 col-lg-24">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Edit Data User</h4>
                </div>
                <div class="card-body">
                  <div class="basic-form">
                    <form method="post" action="">
                      <div class="row">
                        <div class="mb-3 col-md-6">
                          <label class="form-label">Fullname</label>
                          <input type="text" name="fullname" class="form-control" value="<?php echo $data['name']; ?>" />
                        </div>
                        <div class="mb-3 col-md-6">
                          <label class="form-label">Username</label>
                          <input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>" />
                        </div>
                        <div class="mb-3 col-md-6">
                          <label class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" value="<?php echo $data['password']; ?>" />
                        </div>
                        <div class="mb-3 col-md-6">
													<label class="form-label">Role</label>
                          <select id="inputState" name="role" class="default-select form-control wide">
													<?php
														include "../connection/connection.php";

														$getDatac = mysqli_query($conn, "SELECT * from roles");
														while($datac = mysqli_fetch_array($getDatac)){

															if($datac['role'] == $data['role']){
																$selected = "selected";
															}else{
																$selected ="";
															}

													?>
														<option value="<?php echo $datac['role']; ?>" <?php echo $selected; ?>><?php echo $datac['role']; ?></option>
													<?php
														}
													?>
                          </select>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </form>
										<?php include "../functions/get_edit_user.php"; ?>
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