<!doctype html>
<html lang="en">
<head>
    <?php include '../head.html'?>
    <title>ECUP - Register</title>
    <link href="../css/authentication.css" rel="stylesheet">
</head>

<body style="background: url('../img/Team-Meeting.jpg') no-repeat center center fixed;">
<!-- Navigation -->
<?php include '../header.php'?>

<header class="masthead" style="background-color: #f8f9fa96; height: 58px;">
    <div class="overlay"></div>
</header>

<section>
    <div class="container">
        <div class="row" style="justify-content: center;">
            <div class="col-lg-8 col-md-10">
                <div class="col-md-12">
                    <h3 style="text-align: center">SIGN UP</h3>
                    <form class="form-horizontal" method="post" action="register.php" accept-charset="UTF-8">

                        <div class="spacing" style="text-align: center;">
                            <div><img id="blah" src="../img/register/avatar.png" style="width: 30%" alt="your image" /></div>
                            <div><input type="file" class="btn btn-info btn-sm" style="width: 50%; padding: 3px;" name="pic" onchange="readURL(this)"></div>
                        </div>

                        <div class="input-group">
                            <input type="text" class="form-control" name="txtFirstname" placeholder="FIRSTNAME" required="required">
                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>

                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" name="txtLastname" placeholder="LASTNAME" required="required">
                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                        <div class="input-group">
                            <input type="tel" class="form-control" name="txtTel" placeholder="TELEPHONE" minlength="10" maxlength="10" required="required">
                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span></div>
                        <div class="input-group">
                            <input type="email" class="form-control" name="txtEmail" placeholder="EMAIL" required="required">
                            <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        </div>
                        <div class="input-group">
                            <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="PASSWORD"
                                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                   title="Must contain at least one number and one uppercase and lowercase letter and at least 8 or more characters" required>
                            <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                        </div>

                        <div id="message" style="justify-content: flex-start">
                            <div id="length" class="invalid">
                                <small>Password length :8 - 20 characters</small></div>
                            <div id="letter" class="invalid">
                                <small>Password must be at least have a lowercase letter</small></div>
                            <div id="capital" class="invalid">
                                <small>Password must be at least have a uppercase letter</small></div>
                            <div id="number" class="invalid">
                                <small>Password must be at least have 1 number</small></div>
                        </div>

                        <div class="input-group">
                            <input type="password" class="form-control" id="txtRepassword" name="txtRepassword" placeholder="REPASSWORD"
                                   title="This password must be equal to you password" required="required">
                            <span class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                        </div>

                        <div id="checkPassword" style="justify-content: flex-start">
                            <div id="repasswordtext" class="invalid"><small>Password is match</small></div>
                        </div>

                        <div class="spacing" style="text-align: center;">
                            <button name="submit" class="btn btn-warning">Sign Up</button>
<!--                            <a class="btn btn-warning" style="margin: 5px;">Sign Up</a>-->
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
    </div>
</section>

<!-- Bootstrap core JavaScript-->
<?php include '../allscript.html'?>
</body>
</html>
