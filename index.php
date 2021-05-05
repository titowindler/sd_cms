<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>CLASS MANAGEMENT SYSTEM</title>
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
  
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.css">
  
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
</head>


<!-- Header - CSS -->

<body style="background: #2866C7;">
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
           
            <div class="card card-primary" style="box-shadow: 12px 12px #193D75;border-radius: 25px;">
              <div class="card-header"><h3 style="color:#5673A1;padding:0px 0px;letter-spacing:2px;font-size:32px;">Account Login</h3><hr></div>
                  <div class="card-body">


                   <?php if(isset($_GET['valid'])) { 
                        $getSuccess =  $_GET['valid'];
                    ?>
                      <div class="alert alert-success" id="alert"><?php echo $getSuccess; ?></div>
                    <?php } else if(isset($_GET['invalid'])) { 
                       $getFail = $_GET['invalid'];
                    ?>

                      <div class="alert alert-danger" id="alert"><?php echo $getFail; ?></div>

                    <?php } else if(isset($_GET['nonvalid'])) { 
                      $getUpdate = $_GET['nonvalid'];
                    ?>
                      <div class="alert alert-info" id="alert"><?php echo $getUpdate; ?></div>

                    <?php } ?>
                   
                    <form method="POST" action="backend/login.php" class="needs-validation" novalidate="" id="loginform">
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus id="username">
                        <div class="invalid-feedback">
                          Please fill in your username
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="d-block">
                          <label for="password" class="control-label">Password</label>
                          <div class="float-right">
                            <a href="forgot_password.php" class="text-small">
                              Forgot Password?
                            </a>
                          </div>
                        </div>
                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required id="password">
                        <div class="invalid-feedback">
                          Please fill in your password
                        </div>
                      </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" name="login">
                          Login
                        </button>
                      </div>
                    </form>

                    <div class="text-center mt-4 mb-3">
                      </div> 

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<!-- Footer - Javascript -->

<?php 

//require("footer.php");

?>

  <!-- General JS Scripts -->
  <script src="assets/vendors/jquery/jquery.min.js"></script>

  <script src="assets/js/stisla.js"></script>
  <script src="assets/vendors/bootstrap/js/bootstrap.js"> </script>

  <script src="assets/vendors/jquery-nicescroll/js/jquery.nicescroll.js"> </script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>




</body>
</html>
