<!doctype html>
<html lang="en">
<head>
    <?php include '../head.html'?>
    <title>ECUP - Register</title>
    <link href="../../css/authentication.css" rel="stylesheet">
</head>

<body style="background: url('../../img/Team-Meeting.jpg') no-repeat center center fixed;">
<!-- Navigation -->
<?php include '../header.php';
include '../../connect-mysql.php';
?>

<br>

<section>
    <div class="container">
        <div class="row" style="justify-content: center;">
            <div class="col-lg-8 col-md-10">
                <div class="col-md-12">
                    <h3 style="text-align: center">PAYMENT</h3>
                    <form class="form-horizontal" method="post" action="payment.php" accept-charset="UTF-8">

                        <div class="input-group">
                            <select name="organization">
                                <option value="">Select Organization</option>
                                <?php
                                $strSQL = "SELECT * FROM organization ORDER BY id ASC";
                                $objQuery = mysqli_query($objCon,$strSQL);
                                while( $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
                                {
                                    ?>
                                    <option value="<?php echo $objResult["id"];?>"><?php echo $objResult["id"]." - ".$objResult["name"];?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-group">
                            <select name="activity">
                                <option value="">Select Activity</option>
                                <?php
                                $strSQL = "SELECT * FROM activity ORDER BY id ASC";
                                $objQuery = mysqli_query($objCon,$strSQL);
                                while( $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
                                {
                                    ?>
                                    <option value="<?php echo $objResult["id"];?>"><?php echo $objResult["id"]." - ".$objResult["name"];?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" name="txtDetail" placeholder="Detail" required="required">
                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                            <div><img id="blah" src="../../img/register/avatar.png" style="width: 30%" alt="your image" /></div>
                            <div><input type="file" class="btn btn-info btn-sm" style="width: 50%; padding: 3px;" name="pic" onchange="readURL(this)"></div>
                        </div>

                        <div class="spacing" style="text-align: center;">
                            <button name="submit" class="btn btn-warning">Submit</button>
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
