<?php include "../header/header.php"; ?>

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
              <li class="breadcrumb-item active"><a href="javascript:void(0)">Data User</a></li>
            </ol>
          </div>
          <!-- row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
									<a href="../add/adduser.php" class="btn btn-primary d-sm-inline-block d-none">Add Data</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-responsive-md">
                      <thead>
                        <tr>
                          <th style="width: 80px"><strong>#</strong></th>
                          <th><strong>Name</strong></th>
                          <th><strong>Username</strong></th>
                          <th><strong>Role</strong></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
											<?php
												include "../connection/connection.php";

												$getData=mysqli_query($conn, "SELECT * FROM user ORDER BY name ASC");
												$no=1;
												while($data = mysqli_fetch_array($getData)){
													echo "<tr>
                          <td><strong>$no</strong></td>
                          <td>$data[name]</td>
                          <td>$data[username]</td>
                          <td>$data[role]</td>
                          <td>
                            <div class='dropdown'>
                              <button type='button' class='btn btn-primary light sharp' data-bs-toggle='dropdown'>
                                <svg width='20px' height='20px' viewbox='0 0 24 24' version='1.1'>
                                  <g stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                                    <rect x='0' y='0' width='24' height='24'></rect>
                                    <circle fill='#000000' cx='5' cy='12' r='2'></circle>
                                    <circle fill='#000000' cx='12' cy='12' r='2'></circle>
                                    <circle fill='#000000' cx='19' cy='12' r='2'></circle>
                                  </g>
                                </svg>
                              </button>
                              <div class='dropdown-menu'>
                                <a class='dropdown-item' href='../edit/edituser.php?username=$data[username]'>Edit</a>
                                <a class='dropdown-item' href='../delete/deleteuser.php?username=$data[username]'>Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>";
													$no++;
												}
											?>
                      </tbody>
                    </table>
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