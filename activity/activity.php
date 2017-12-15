<!DOCTYPE html>
<html lang="en">

  <head>
      <?php include '../head.html'?>
      <title>ECUP - Activity</title>
  </head>

  <body>
    <!-- Navigation -->
    <?php include '../header.php'?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('../img/mottojpg_1_0.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Activity</h1>
              <span class="subheading">This is what we do.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-light" id="portfolio">
        <div class="container">
<!--            <div class="row">-->
<!--                <div class="col-lg-12 text-center">-->
<!--                    <h2 class="section-heading text-uppercase">Portfolio</h2>-->
<!--                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
<!--                </div>-->
<!--            </div>-->
            <br>
            <?php include '../connect-mysql.php';

            $query = "SELECT * FROM activity";
            $sql = mysqli_query($objCon,$query);
            $result = array();
            mysqli_set_charset($objCon,"utf8");
            while ($row_user = mysqli_fetch_assoc($sql)){
                $result[] = $row_user;
            }

            ?>
            <div class="row">
                <?php
                foreach ($result as &$value) {
                ?>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <?php echo '<img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $value['pic'] ).'"/>';?>
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $value["name"];
                            ?></h4>
                        <p class="text-muted"><?php echo $value["detail"]; ?></p><br>
                        <a href="#" class="btn-sm btn-warning">Read More</a>
                    </div>
                </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <hr>
    <!-- Footer -->
    <?php include '../footer.php'?>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase"><?php echo $value["name"]; ?></h2>
<!--                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                                <?php echo '<img class="img-fluid d-block mx-auto" src="data:image/jpeg;base64,'.base64_encode( $value['pic'] ).'" alt=""/>';?>
                                <p><?php echo $value["detail"]; ?></p>
                                <ul class="list-inline">
                                    <li>Date: <?php echo $value["createdate"]; ?></li>
<!--                                    <li>Client: Threads</li>-->
<!--                                    <li>Category: Illustration</li>-->
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fa fa-times"></i>
                                    Close Activity</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php include '../allscript.html'?>

  </body>

</html>
