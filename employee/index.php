<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ECUP - HOME</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
      <link href="../css/clean-blog.min.css" rel="stylesheet">
      <link href="../css/style.css" rel="stylesheet">
      <link href="../css/employee.css" rel="stylesheet">

      <style>
          .circle{ /* ชื่อคลาสต้องตรงกับ <img class="circle"... */
              height: 20vh;
              width: 20vh; /* ความสูงปรับให้เป็นออโต้ */
              border: 3px solid #fff; /* เส้นขอบขนาด 3px solid: เส้น #fff:โค้ดสีขาว */
              border-radius: 80%; /* ปรับเป็น 50% คือความโค้งของเส้นขอบ*/
              box-shadow: 0 0 5px #0085a1;
          }

          .circleDescription{ /* ชื่อคลาสต้องตรงกับ <img class="circle"... */
              height: 30vh;
              width: 30vh;  /* ความสูงปรับให้เป็นออโต้ */
              border: 3px solid #fff; /* เส้นขอบขนาด 3px solid: เส้น #fff:โค้ดสีขาว */
              border-radius: 80%; /* ปรับเป็น 50% คือความโค้งของเส้นขอบ*/
              box-shadow: 0 0 5px #17a2b8;
              background-color: #97d4eea6;
              margin-left: auto!important;
              margin-right: auto!important;
              margin-top: -20%;
          }
      </style>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="/ecup/employee/index.php">E-CUP</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Management</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-warning" href="/ecup/logout.php">Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('../img/employee/employee_banner.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
        </div>
      </div>
    </header>
<br>
    <!-- Main Content -->
    <section class="bg-light" id="whoami" style="padding: 10vh;">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 mx-auto text-center cta">
                    <h2 class="section-heading text-black" style="margin: 5vh;">E-Cup TEAM</h2>
                </div>
            </div>
        </div>
    </section>
    <br>

    <section class="p-0" id="activity">
        <div class="container-fluid p-3">

            <?php include '../connect-mysql.php';

            $query = "SELECT * FROM activity LIMIT 6";
            $sql = mysqli_query($objCon,$query);
            $result = array();
            mysqli_set_charset($objCon,"utf8");
            while ($row_user = mysqli_fetch_assoc($sql)){
                $result[] = $row_user;
            }
            ?>

            <div class="row no-gutters popup-gallery">

                <?php
                foreach ($result as &$value) {
                    ?>
                <div class="col-lg-4 col-sm-6" style="justify-content: center; text-align: center;">
                    <a class="col-md-12" href="<?php echo 'data:image/jpeg;base64,'.base64_encode( $value['pic'] ).''?>" alt="<?php echo $value["name"]?>">
                        <?php echo '
                        <img class="circle" src="data:image/jpeg;base64,'.base64_encode( $value['pic'] ).'" alt="echo $value["name"]">
                        ' ;?>
                    </a>
                    <div class="circleDescription">
                        <p class="des text-uppercase" style="margin-top: 13vh; font-weight: 800;">
                            <b>Pornpunnarai</b>
                        </p>
                        <p class="des" style="margin-top: -3vh;">
                            Programmer
                        </p>
                    </div>
                    <br>
                </div>

                <?php
                }
                ?>
            </div>

        </div>
    </section>
<br>

    <!-- Footer -->
    <?php include '../footer.php'?>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="../vendor/scrollreveal/scrollreveal.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/clean-blog.min.js"></script>
    <script src="../js/creative.min.js"></script>

  </body>

</html>
