<?php
include '../connect-mysql.php';

if (isset($_GET["id"])) {

    $u_time = intval(base64_decode($_GET["time"])); // fetching time variable from URL
    $cur_time = time(); //fetching current time to check with GET variable's time
    if ($cur_time - $u_time < 600) {




  $id = intval(base64_decode($_GET["id"]));
 
  $sql = "SELECT * FROM users WHERE id = $id";
  try {
      $objQuery = mysqli_query($objCon, $sql);
      $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

    if ($result) {

      if ($result[0]["status"] == "approved") {
        $msg = "Your account has already been activated.";
        $msgType = "info";
      } else {
        $sql = "UPDATE `users` SET  `status` =  'approved' WHERE `id` = $id";
          $objQuery = mysqli_query($objCon, $sql);
        $msg = "Your account has been activated.";
        $msgType = "success";
      }
    } else {
      $msg = "No account found";
      $msgType = "warning";
    }
  } catch (Exception $ex) {
    echo $ex->getMessage();
  }
}
}
?>

<?php if ($msg <> "") {
    echo "<script type='text/javascript'>alert('$msg')</script>";
?>
<?php }
?>

    <html>
    <head>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="row col-md-12" style="margin-left: 10px; margin-top: 10px">
        <div class="card" style="justify-content: center;width: 100%;padding: 50px;text-align: center;">
            <div class="row" style="justify-content: center">
                <img src="/osmpoll/pic/activatedAlready.JPG" style="width: 100%; justify-content: center"><br>
            </div>
            <div class="row" style="justify-content: center">
                <a href="/osmpoll" class="btn btn-info" style="width: 50%; border-radius: 25px;">Go To Login!</a>
            </div>
        </div>
    </div>
    </body>
    </html>

<script type="text/javascript">


  function isValidEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
  }


</script>

<?php
include './footer.php';
?>