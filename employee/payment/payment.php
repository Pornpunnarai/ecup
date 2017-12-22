<?php
include '../../connect-mysql.php';
session_start();


if (isset($_POST["organization"])) {
    $Organization = trim($_POST['organization']);
    $Activity = trim($_POST['activity']);
    $Detail = trim($_POST['txtDetail']);



    $Picture = trim($_POST['pic']);

    $sql = "INSERT INTO payment (`organization_id`, `project_id`, `detail`, `bill_pic`) VALUES 
            ('$Organization','$Activity','$Detail','$Picture')";
    $objQuery = mysqli_query($objCon,$sql);
    mysqli_close($objCon);



}
 ?>



