<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="shortcut icon" type="image/png" href="../images/favicon.png" />

    <title>Login</title>
  </head>
  <body style="background-color: #e3f2fd">
    <div class="container h-100 mt-5">
      <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-6">
          <div class="authincation-content">
            <div class="row no-gutters">
              <div class="col-xl-12">
                <div class="card shadow p-5" style="border-radius: 26px">
                  <div class="card-body">
                    <div class="text-center mb-3">
                      <img src="../images/logo-full.png" alt="" />
                    </div>
                    <h4 class="text-center mb-4">Sign in your account</h4>
                    <form method="POST" action="">
                      <div class="mb-3">
                        <label class="mb-1"><strong>Username</strong></label>
                        <input type="text" name="username" class="form-control" />
                      </div>
                      <div class="mb-3">
                        <label class="mb-1"><strong>Password</strong></label>
                        <input type="password" name="password" class="form-control" />
                      </div>
                      <div class="mb-3">
                        <select class="form-select" name="role" aria-label="Default select example">
                          <option value="" selected>Pilih Role</option>
                          <?php
														include "../connection/connection.php";
														$getRole = mysqli_query($conn, "SELECT * from roles");
														while($data = mysqli_fetch_array($getRole)) {
													?>
                          <option value="<?php echo $data['role']; ?>"><?php echo $data['role']; ?></option>
                          <?php
														}
													?>
                        </select>
                      </div>
                      <div class="d-grid gap-2 mt-5">
                        <button style="border-radius: 10px; background-color: #2196f3; color: white" type="submit" class="btn p-2">Login</button>
                      </div>
                    </form>
                    <?php include "../functions/get_login.php" ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
