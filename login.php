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
          background-color: #1e1c1b4a;
      }
      hr{
          border-top: 1px solid #17a2b8;
          width: 40%;
      }
      @media only screen and (max-width: 520px) {
       img{
           width: 60%;
           padding: 5px;
           border-radius: 10px;
           display: block;
           margin: auto;
       }
      }
      @media only screen and (min-width: 520px) {
          img{
              width: 90%;
              margin: 10px;
          }
      }
      div.row{

          margin-right: 0px;
          margin-left: 0px;
      }
      /*@media screen and (max-width: 480px) {*/

          /*img {width:50%}*/

      /*}*/

  </style>

  <!-- Navigation -->
  <?php include 'header.php'?>

  <!-- Page Header -->
  <header class="masthead" style="background-color: #f8f9fa96; height: 58px;">
      <div class="overlay"></div>
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                  <div class="page-heading">

                  </div>
              </div>
          </div>
      </div>
  </header>

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
                          <a href="/osmpoll/facebook-login-api"><img src="img/register/fb.JPG"></a>
                      </div>
                      <div class="col-md-4 col-sm-6">
                          <a href="/osmpoll/google-login-api"><img src="img/register/google.JPG"></a>
                      </div>
                      <div class="col-md-4 col-sm-6">
                          <a href="/osmpoll/register"><img src="img/register/email.JPG"></a>
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
