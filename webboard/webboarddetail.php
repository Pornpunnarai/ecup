<?php
include '../connect-mysql.php';
session_start();
$_SESSION["UserID"] = (int)1;
$user_id = $_SESSION["UserID"];
//session_destroy();

if(isset($_GET["Action"]))
{
    if($_POST["txtDetails"] != null){
        //*** Insert Reply ***//
        $strSQL = "INSERT INTO reply ";
        $strSQL .="(question_id,details,name) ";
        $strSQL .="VALUES ";
        $strSQL .="('".$_GET["QuestionID"]."','".$_POST["txtDetails"]."','".$_SESSION["UserID"]."') ";
        $objQuery = mysqli_query($objCon,$strSQL);
        echo $strSQL;
        //*** Update Reply ***//
        $strSQL = "UPDATE webboard ";
        $strSQL .="SET reply = reply + 1 WHERE question_id = '".$_GET["QuestionID"]."' ";
        $objQuery = mysqli_query($objCon,$strSQL);
        header("location:webboarddetail.php?QuestionID=".$_GET["QuestionID"]."");

    }

}

if (isset($_POST['liked'])) {
    $webboard_id = $_POST['webboard_id'];
    $result = mysqli_query($objCon, "SELECT * FROM webboard WHERE id=$webboard_id");
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $n = $row['likes'];

    mysqli_query($objCon, "INSERT INTO likes (user_id, webboard_id) VALUES ($user_id, $webboard_id)");
    mysqli_query($objCon, "UPDATE webboard SET likes=$n+1 WHERE id=$webboard_id");

    echo $n+1;
    exit();
}

if (isset($_POST['unliked'])) {
    $webboard_id = $_POST['webboard_id'];
    $result = mysqli_query($objCon, "SELECT * FROM webboard WHERE id=$webboard_id");
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $n = $row['likes'];

    mysqli_query($objCon, "DELETE FROM likes WHERE webboard_id=$webboard_id AND user_id=$user_id");
    mysqli_query($objCon, "UPDATE webboard SET likes=$n-1 WHERE id=$webboard_id");

    echo $n-1;
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

  <head>
      <?php include '../head.html'?>
      <title>ECUP - WebBoard</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
      <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <!-- Navigation -->
    <?php include '../header.php';
    //*** Select Question ***//
    $strSQL = "SELECT * FROM webboard  WHERE id = '".$_GET["QuestionID"]."' ";
    $objQuery = mysqli_query($objCon,$strSQL) or die ("Error Query [".$strSQL."]");
    $objResult = mysqli_fetch_array($objQuery);

    //*** Update View ***//
    $strSQL = "UPDATE webboard ";
    $strSQL .="SET view = view + 1 WHERE id = '".$_GET["QuestionID"]."' ";
    $strSQL = "UPDATE webboard SET view = view + 1 WHERE id = '".$_GET["QuestionID"]."' ";
    $objQuery = mysqli_query($objCon,$strSQL);
    ?>

    <!-- Page Header -->
    <header class="masthead" style="background-color: whitesmoke; height: 58px;">
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

    <!-- Main Content -->

    <section class="bg-light" id="portfolio">
        <div class="container">
            <br>
            <div class="col-md-12" style="justify-content: center;">
                <div class="col-md-12" style="background-color:lightgray; padding: 20px;border-radius: 25px;">
                    <br>
                    <div class="row col-md-12" style="justify-content: center;">
                        <h1><?php echo $objResult["question"];?></h1>
                        <p><?php echo nl2br($objResult["details"]);?>
                        </p>
                    </div>
                    <hr>
                    <div class="row col-md-12">
                        <table>
                            <td style="border: #868e9608;text-align: left;">Name: <?php echo $objResult["name"];?> Created on: <?php echo $objResult["create_date"];?></td>
                            <td style="border: #868e9608;text-align: right;">View : <?php echo $objResult["view"];?> Reply: <?php echo $objResult["reply"];?> VOTE : <span class="likes_count"><?php echo $objResult['likes']; ?> </span>
<!--                                <i class="fa fa-thumbs-up" aria-hidden="true"></i>-->
                                <?php
                                // determine if user has already liked this post
                                $results = mysqli_query($objCon, "SELECT * FROM likes WHERE user_id=$user_id AND webboard_id='".$objResult['id']."'");

                                if (mysqli_num_rows($results) == 1 ): ?>
                                    <!-- user already likes post -->
                                    <span class="unlike fa fa-thumbs-up" data-id="<?php echo $objResult['id']; ?>"></span>
                                    <span class="like hide fa fa-thumbs-o-up" data-id="<?php echo $objResult['id']; ?>"></span>
                                <?php else: ?>
                                    <!-- user has not yet liked post -->
                                    <span class="like fa fa-thumbs-o-up" data-id="<?php echo $objResult['id']; ?>"></span>
                                    <span class="unlike hide fa fa-thumbs-up" data-id="<?php echo $objResult['id']; ?>"></span>
                                <?php endif ?>

                            </td>
                        </table>
                        <div class="col-xs-6">

                        </div>
                        <div class="col-xs-6">

                        </div>
                    </div>
                </div>
            </div>
            <br>
            <?php

            $intRows = 0;
            $strSQL2 = "SELECT * FROM reply  WHERE question_id = '".$_GET["QuestionID"]."' Order By create_date ";
            $objQuery2 = mysqli_query($objCon,$strSQL2) or die ("Error Query [".$strSQL."]");
            while($objResult2 = mysqli_fetch_array($objQuery2))
            {
            $intRows++;
            ?>
                <br>
            <div class="col-md-12">
                <div class="col-md-12" style="background-color: #524d4dc2; color: white;padding: 20px;border-radius: 25px;">
                    <br>
                    <div class="row col-md-12">
                        <h4><i class="fa fa-comments-o" aria-hidden="true"></i> ความคิดเห็นที่  <?=$intRows;?></h4><br>
                    </div>

                    <div class="row col-md-12">
                        <p><?=nl2br($objResult2["details"]);?></p>
                    </div>
                    <hr>
                    <div class="row col-md-12">
                        <table>
                            <td style="width:50%;border: #868e9608;text-align: left;">Name: <?=nl2br($objResult2["name"]);?></td>
                            <td style="width:50%;border: #868e9608;text-align: right;">Created on: <?=nl2br($objResult2["create_date"]);?></td>
                        </table>
                    </div>
                </div>
            </div>
                <?php
            }
            ?>
            <br>

            <div class="col-md-12">
                <div class="col-md-12" style="background-color: #dae0e5;padding: 20px;border-radius: 25px;">
                    <div class="row col-md-12">
                        <h5>แสดงความคิดเห็น</h5>
                    </div>

                    <div class="row" style="justify-content: center;">
                        <div class="col-md-12">
                            <form action="webboarddetail.php?QuestionID=<?php echo $_GET["QuestionID"];?>&Action=Save" method="post" name="frmMain" id="frmMain">
                            <textarea class="form-control" rows="6" cols="100" id="txtDetails" name="txtDetails"
                                      style="margin-top: 3px;background-color: darkgrey;color: white; width: 100%; font-size: 100%;"></textarea>
                                <input class="btn btn-warning pull-right" style="padding: 15px;margin-top: 2px;" name="btnSave" type="submit" id="btnSave" value="ส่งข้อความ">
                            </form>
                        </div>

                    </div>
                    <hr>
                    <div class="row col-md-12">
                        <table>
                            <td style="width:50%;border: #868e9608;text-align: left;">Name: <?php  echo $_SESSION["UserID"]?></td>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </section>
    <hr>

    <!-- Footer -->
    <?php include '../footer.php'; include '../allscript.html'?>

    <!-- Add Jquery to page -->
    <script src="jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // when the user clicks on like
            $('.like').on('click', function(){
                var webboard_id = $(this).data('id');
                $post = $(this);

                $.ajax({
                    url: 'webboarddetail.php',
                    type: 'post',
                    data: {
                        'liked': 1,
                        'webboard_id': webboard_id
                    },
                    success: function(response){
                        $post.parent().find('span.likes_count').text(response + " likes");
                        $post.addClass('hide');
                        $post.siblings().removeClass('hide');
                    }
                });
            });

            // when the user clicks on unlike
            $('.unlike').on('click', function(){
                var webboard_id = $(this).data('id');
                $post = $(this);

                $.ajax({
                    url: 'webboarddetail.php',
                    type: 'post',
                    data: {
                        'unliked': 1,
                        'webboard_id': webboard_id
                    },
                    success: function(response){
                        $post.parent().find('span.likes_count').text(response + " likes");
                        $post.addClass('hide');
                        $post.siblings().removeClass('hide');
                    }
                });
            });
        });
    </script>
  </body>

</html>
<?php
mysqli_close($objCon);
?>