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
              <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Siswa</a></li>
            </ol>
          </div>

          <!-- <div class="alert alert-success alert-dismissible fade show">
            <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
            <strong>Success!</strong> Message has been sent.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
			  	</div>

          <div class="alert alert-danger alert-dismissible fade show">
            <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
            <strong>Error!</strong> Message sending failed.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
          </div> -->

          <!-- row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
									<a href="../add/addstudent.php" class="btn btn-primary d-sm-inline-block d-none">Add Data</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-responsive-md">
                      <thead>
                        <tr>
                          <th style="width: 80px"><strong>#</strong></th>
                          <th><strong>NIS</strong></th>
                          <th><strong>Nama</strong></th>
                          <th><strong>Kelas</strong></th>
                          <th><strong>Wali Kelas</strong></th>
                          <th><strong>Tahun Ajaran</strong></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
											<?php
												include "../connection/connection.php";

												$getData=mysqli_query($conn, "SELECT a.*, b.fullname FROM student as a inner join wclass as b on a.class = b.class order by class asc");
												$no=1;
												while($data = mysqli_fetch_array($getData)){
													echo "<tr>
                          <td><strong>$no</strong></td>
                          <td>$data[nis]</td>
                          <td>$data[student_name]</td>
                          <td>$data[class]</td>
                          <td>$data[fullname]</td>
                          <td>$data[periode]</td>
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
                                <a class='dropdown-item' href='../edit/editstudent.php?nis=$data[nis]'>Edit</a>
                                <a class='dropdown-item' href='../delete/deletestudent.php?nis=$data[nis]'>Delete</a>
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

<p>Menghapus siswa berarti juga menghapus tagihan siswa...</p>

<?php include "../footer/footer.php"; ?>