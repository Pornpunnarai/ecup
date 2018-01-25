<?php
session_start();
include '../connect-mysql.php';

$strSQL = "SELECT * FROM employee WHERE username = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."' 
	and password = '".mysqli_real_escape_string($objCon,md5($_POST['txtPassword']))."'";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
if(!$objResult)
{
    echo "<script type='text/javascript'>alert('Username and Password Incorrect!')</script>";
    echo "<script>setTimeout(\"location.href = 'index.php';\",2000);</script>";
}
else
{


    if($objResult["status"] == "approved")
    {
        $_SESSION["User_ID"] = $objResult["id"];
        $_SESSION["Name"] = $objResult["firstname"]." ".$objResult["lastname"];
        $_SESSION["Email"] = $objResult["email"];
        $_SESSION["Type"] = "Register";

        session_write_close();

        echo "<script type='text/javascript'>alert('Login Successful! Welcome to E-cup Website')</script>";
        echo "<script>setTimeout(\"location.href = '/ecup/employee/home.php';\",2000);</script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('Login Failed! Please Verify you Email Address')</script>";
        echo "<script>setTimeout(\"location.href = '/ecup/employee/';\",2000);</script>";

        //echo "fail";
    }
}
mysqli_close($objCon);
?>