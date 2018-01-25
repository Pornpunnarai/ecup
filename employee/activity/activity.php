<?php
include '../../connect-mysql.php';
session_start();


if (isset($_POST["textActName"])) {
    $Activity = trim($_POST['textActName']);


    $sql = "INSERT INTO activity (`name`) VALUES ('$Activity')";
    $objQuery = mysqli_query($objCon,$sql);
    mysqli_close($objCon);

header('location:index.php');

}

echo $_POST["textActName"];
 ?>



