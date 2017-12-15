<?php
include '../connect-mysql.php';
if(!isset($_SESSION))
{
    session_start();
}
if(!isset($_SESSION["User_ID"])) {
    header('location:webboard.php');
}
$strAction = isset($_GET['Action']) ? $_GET['Action'] : '';
if($strAction == "Save")
{
	//*** Insert Question ***//
	$strSQL = "INSERT INTO webboard ";
	$strSQL .="(question,details,name) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$_POST["txtQuestion"]."','".$_POST["txtDetails"]."','".$_SESSION["Name"]."') ";
	$objQuery = mysqli_query($objCon,$strSQL);
    $last_id = mysqli_insert_id($objCon);
	header("location:webboarddetail.php?QuestionID=".$last_id);
}
?>
<html>
<head>
    <?php include '../head.html'?>
    <title>ECUP - Add WebBoard</title>
</head>
<body>
<!-- Navigation -->
<?php include '../header.php'?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('../img/Team-Meeting.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Web Board</h1>
                    <span class="subheading">Enjoy to create a Web Board!</span>
                </div>
            </div>
        </div>
    </div>
</header>


<section class="bg-light" id="portfolio">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12">

                <div class="col-md-12" style="background-color: #524d4d8a; color: white;padding: 20px;border-radius: 25px;">
                    <form action="newtopic.php?Action=Save" method="post" name="frmMain" id="frmMain">
                        <form action="newtopic.php?Action=Save" method="post" name="frmMain" id="frmMain">
                            <div class="row col-md-12">
                                <div class="col-md-2">
                                    Topic
                                </div>
                                <div class="col-md-10">
                                    <input class="form-control" style="background-color: #495066; color: white" name="txtQuestion" type="text" id="txtQuestion" value="">
                                </div>
                            </div>
                            <div class="row col-md-12">
                                <div class="col-md-2">
                                    Details
                                </div>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="6" cols="100" id="txtDetails" name="txtDetails" style="margin-top: 3px;
                                    background-color: #495066;color: white; font-size: 100%;"></textarea>
                                </div>
                            </div>
                            <br>

                            <div class="row col-md-12">
                                <div class="col-md-6">
                                    Name : <?php echo $_SESSION["Name"];?>
                                </div>
                                <div class="col-md-6">
                                    <input class="btn btn-warning pull-right" name="btnSave" type="submit" id="btnSave" value="Submit">
                                </div>
                            </div>
                        </form>
                    </form>
                </div>

                <br>
            </div>
        </div>
    </div>
</section>

</body>
</html>
<?php
session_write_close();
mysqli_close($objCon);
?>