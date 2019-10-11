<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Furniture Managenet - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('asset/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('asset/');?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-8 col-lg-8 col-md-8">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang Di Furniture Managenet</h1>
                  </div>
                  <!-- validasi -->
                  <?php if($this->session->flashdata('pesan1')) {?>
                      <div class="alert alert-warning" role="alert">
                          <h4>Peringatan!</h4>
                          <?php echo $this->session->flashdata('pesan1'); ?>
                      </div>
                  <?php }elseif($this->session->flashdata('pesan2')) {?>
                      <div class="alert alert-warning" role="alert">
                          <h4>Ada Kesalahan!</h4>
                          <?php echo $this->session->flashdata('pesan2'); ?>
                      </div>
                  <?php }; ?>
                  <form method="POST" action="<?php echo base_url('login_admin/login'); ?>" class="user">
                    <div class="form-group">
                      <input id="user" type="text" class="form-control form-control-user" name="user" tabindex="1" placeholder="Isi Username" required autofocus>
                    </div>
                    <div class="form-group">
                      <input id="password" type="password" class="form-control form-control-user" name="pass" tabindex="2" placeholder="Isi Password" required>
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Login">
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('asset/');?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('asset/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('asset/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('asset/');?>js/sb-admin-2.min.js"></script>

</body>

</html>
