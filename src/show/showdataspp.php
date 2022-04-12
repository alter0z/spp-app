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
              <li class="breadcrumb-item active"><a href="javascript:void(0)">Data SPP</a></li>
            </ol>
          </div>
          <!-- row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
									<h4 class="card-title">Data SPP</h4>
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
                          <th><strong>Biaya</strong></th>
                          <th><strong>Jatuh Tempo</strong></th>
                          <th><strong>Status</strong></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
											<?php
												include "../connection/connection.php";

												$getData = mysqli_query($conn,"SELECT a.*, b.*, c.fullname FROM student as a inner join spp as b on a.nis = b.nis right join wclass as c on a.class = c.class where c.class in (a.class) order by a.student_name asc");
												$no=1;
												while($data = mysqli_fetch_array($getData)) {
													$date = date('D, d M Y',strtotime($data['duedate']));
													echo "<tr>
                          <td><strong>$no</strong></td>
                          <td>$data[nis]</td>
                          <td>$data[student_name]</td>
                          <td>$data[class]</td>
                          <td>$data[fullname]</td>
                          <td>$data[periode]</td>
                          <td>$data[spp_cost]</td>
                          <td>$date</td>
                          <td>$data[status]</td>
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