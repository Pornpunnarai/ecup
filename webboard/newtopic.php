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
<title>ThaiCreate.Com</title>
</head>
<body>
<?php
?>

<form action="newtopic.php?Action=Save" method="post" name="frmMain" id="frmMain">
  <table width="621" border="1" cellpadding="1" cellspacing="1">
    <tr>
      <td>Question</td>
      <td><input name="txtQuestion" type="text" id="txtQuestion" value="" size="70"></td>
    </tr>
    <tr>
      <td width="78">Details</td>
      <td><textarea name="txtDetails" cols="50" rows="5" id="txtDetails"></textarea></td>
    </tr>
    <tr>
      <td>Name : <?php echo $_SESSION["Name"];?></td>
    </tr>
  </table>
  
  <input name="btnSave" type="submit" id="btnSave" value="Submit">
</form>
</body>
</html>
<?php
session_write_close();
mysqli_close($objCon);
?>