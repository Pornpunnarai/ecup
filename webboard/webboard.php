<!DOCTYPE html>
<html lang="en">

  <head>
      <?php include '../head.html'?>
      <title>ECUP - WebBoard</title>
  </head>

  <body>
  <?php
  include '../connect-mysql.php';
  $strSQL = "SELECT * FROM webboard ";
  $objQuery = mysqli_query($objCon, $strSQL);
  $Num_Rows = mysqli_num_rows($objQuery);

  $Per_Page = 10;   // Per Page


  $Page = isset($_GET['Page']) ? $_GET['Page'] : '';
  if(!$Page)
  {
//
//if(!$_GET["Page"])
//{
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

  $strSQL .="order  by View DESC LIMIT $Page_Start , $Per_Page";
  $objQuery  = mysqli_query($objCon,$strSQL);

  ?>
    <!-- Navigation -->
    <?php include '../header.php'?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('../img/594-x250-chat-banner.png')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Web Board</h1>
              <span class="subheading">Let's go to talk !</span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Main Content -->
    <section class="bg-light" id="portfolio">
        <div class="container">
            <br>
            <div class="row">
                <div class="col-md-12" style="text-align: right">
                    <button class="btn-sm btn-primary" type="button">ตั้งกระทูใหม่้</button>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                <div style="overflow-x:auto;">
                    <table>
                        <tr>
                            <th>กระทู้</th>
                            <th>ผู้โพสต์</th>
                            <th>อ่าน/ตอบ</th>
                            <th>ตั้งกระทู้เมื่อ</th>
                            <th>อัพเดตล่าสุด</th>
                            <th>ผลโหวต</th>
                        </tr>
                        <?php

                        while ($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC))
                        {

                        ?>
                        <tr>
                            <td><a href="webboarddetail.php?QuestionID=<?php echo $objResult["id"];?>"><?php echo $objResult["question"];?></a></td>
                            <td><?php echo $objResult["name"];?></td>
                            <td><?php echo $objResult["view"]."/".$objResult["reply"];?></td>
                            <td><?php echo $objResult["create_date"];?></td>
                            <td>-</td>
                            <td><?php echo $objResult["likes"];?></td>
                        </tr>
                            <?php
                        }
                        ?>
                        </tr>
                    </table>
                </div>
                <br>
            </div>
            </div>
        </div>
    </section>
    <hr>

    <!-- Footer -->
    <?php include '../footer.php'; include '../allscript.html'?>

  </body>

</html>
