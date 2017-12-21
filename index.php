<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ECUP - HOME</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

      <!-- Plugin CSS -->
      <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
      <link href="css/clean-blog.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <?php include 'header.php'?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>E - Cup</h1>
              <span class="subheading">Excellence center in URBAN STUDY and PUBLIC POLICY</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <section class="bg-warning" id="whoami" style="padding: 10vh;">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 mx-auto text-center cta">
                    <h2 class="section-heading text-black" style="margin: 5vh;">Who Am I?</h2>
                    <hr class="light my-4">
                    <p class="text-faded mb-4">.zjd lvkSG;KSNG;LSKFLKSJAGL SKJG ;LSJG;SNVSNMS;,NCNSKLNFNSLVL</p>
                    <a class="btn btn-warning btn-xl js-scroll-trigger" style="margin-bottom: 2vh;"
                       href="https://www.cmu.ac.th/en/index.php">Visit Website</a>
                </div>
            </div>
        </div>
    </section>
    <br>

    <section class="p-0" id="activity">
        <br><h3 class="text-center text-uppercase">Activity</h3><br>
        <div class="container-fluid p-0">

            <?php include 'connect-mysql.php';

            $query = "SELECT * FROM activity";
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

                <div class="col-lg-4 col-sm-6">
                    <a class="activity-box" href="<?php echo 'data:image/jpeg;base64,'.base64_encode( $value['pic'] ).''?>" alt="<?php echo $value["name"]?>">
                        <?php echo '
                        <img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $value['pic'] ).'" alt="echo $value["name"]">
                        ' ;?>
                        <div class="activity-box-caption">
                            <div class="activity-box-caption-content">
                                <div class="project-name">
                                    <?php echo $value["name"]; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <hr>

    <!-- Footer -->
    <?php include 'footer.php'?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>
    <script src="js/creative.min.js"></script>

  </body>

</html>
