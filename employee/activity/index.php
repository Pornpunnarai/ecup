<?php
if(!isset($_SESSION))
{
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../head.html'?>
    <title>ECUP - WebBoard</title>
</head>

<body>
<?php
include '../../connect-mysql.php';
$strSQL = "SELECT * FROM activity";
$objQuery = mysqli_query($objCon, $strSQL);
$Num_Rows = mysqli_num_rows($objQuery);

$Per_Page = 10;   // Per Page


$Page = isset($_GET['Page']) ? $_GET['Page'] : '';
if(!$Page)
{
    $Page=1;
}

$Prev_Page = $Page-1;
$Next_Page = $Page+1;

$Page_Start = (($Per_Page*$Page)-$Per_Page);
if($Num_Rows<=$Per_Page)
{
    $Num_Pages =1;
}
else if(($Num_Rows % $Per_Page)==0)
{
    $Num_Pages =($Num_Rows/$Per_Page) ;
}
else
{
    $Num_Pages =($Num_Rows/$Per_Page)+1;
    $Num_Pages = (int)$Num_Pages;
}

$strSQL .=" order  by id DESC LIMIT $Page_Start , $Per_Page";
$objQuery  = mysqli_query($objCon,$strSQL);

?>
<!-- Navigation -->
<?php include '../header.php'?>


<!-- Main Content -->
<section class="bg-light" id="portfolio">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12" style="text-align: left">
                <form action="activity.php" method="post">
                    Activity Name: <input type="text" name="textActName" placeholder="Activity Name"><br>
                    <input type="submit" value="Create">
                </form>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div style="overflow-x:auto;">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>

                        </tr>
                        <?php

                        while ($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC))
                        {

                            ?>
                            <tr>
                                <td><?php echo $objResult["id"];?></td>
                                <td><?php echo $objResult["name"];?></td>

                            <?php
                        }
                        ?>
                        </tr>
                    </table>
                    <br>
                    Total <?= $Num_Rows;?> Record : <?=$Num_Pages;?> Page :
                    <?php
                    if($Prev_Page)
                    {
                        echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'><< Back</a> ";
                    }

                    for($i=1; $i<=$Num_Pages; $i++){
                        if($i != $Page)
                        {
                            echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
                        }
                        else
                        {
                            echo "<b> $i </b>";
                        }
                    }
                    if($Page!=$Num_Pages)
                    {
                        echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Next>></a> ";
                    }
                    mysqli_close($objCon);
                    ?>
                </div>
                <br>
            </div>
        </div>
    </div>
</section>
<hr>

<!-- Footer -->
<?php include '../../footer.php'; include '../../allscript.html'?>

</body>

</html>
