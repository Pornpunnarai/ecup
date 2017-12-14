<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ECUP - HOME</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>
  <style>
      body {
          background: url('img/1.jpg') no-repeat center center fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          background-size: cover;
          -o-background-size: cover;


      }
      div.col-lg-8.col-md-10.mx-auto {
          position: fixed;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          -webkit-transform: translate(-50%, -50%);
          -moz-transform: translate(-50%, -50%);
          -o-transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);

          font-size: 20px;
          background-color: #e9ecefdb;
          border-radius: 30px;
          padding: 5px;
          z-index: 100;
      }
      input.form-control{
          background-color: #1e1c1bad;
      }
      hr{
          border-top: 1px solid #17a2b8;
          width: 40%;
      }
  </style>

  <!-- Page Content -->
  <section>
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                  <div class="col-md-12">
                      <br><h3 style="text-align: center">Please Sign In</h3>

                      <form class="form-horizontal" method="post" action="check_login.php">
                          <div class="input-group">
                              <input type="email" class="form-control" name="txtEmail" placeholder="EMAIL" required="required">
                              <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                          </div>
                          <div class="input-group">
                              <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="PASSWORD"
                                     pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                     title="Must contain at least one number and one uppercase and lowercase letter,and at least 8 or more characters"
                                     required>
                              <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                          </div>

                          <div class="spacing" style="text-align: center;">
                              <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
                              <small> <b>Remember me</b></small>
                          </div>

                          <div class="spacing" style="text-align: center;">
                              <a href="register/forgotpassword.php">
                                  <small><b>Forgot Password?</b> </small>
                              </a>
                          </div>

                          <div class="spacing" style="text-align: center;">
                              <a href="#" class="btn btn-warning" style="margin: 5px;" href="#">Sign In</a>
                          </div>
                      </form>

                  </div>

                  <div class="row">
                      <hr>or<hr>
                  </div>

                  <div class="row">
                      <div class="col-md-4 col-sm-6">
                          <a href="/osmpoll/facebook-login-api" class="btn"><img src="img/register/loginwithfacebook.png" style="width: 100%;"></a>
                      </div>
                      <div class="col-md-4 col-sm-6">
                          <a href="/osmpoll/google-login-api" class="btn"><img src="img/register/loginwithgoogle.png" style="width: 100%;"></a>
                      </div>
                      <div class="col-md-4 col-sm-6">
                          <a href="/osmpoll/register" class="btn btn-group-sm btn-secondary" style="width: 100%; margin-top: 4%;">Register By Email</a>
                      </div>
                  </div>
              </div>
              </div>
          </div>
      </div>
  </section>

   <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
