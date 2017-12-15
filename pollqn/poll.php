

<!DOCTYPE html>
<html lang="en">

  <head>
      <?php include '../head.html'?>
      <title>ECUP - Poll</title>
  </head>

  <body>

    <!-- Navigation -->
    <?php include '../header.php'?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('../img/voting banner.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Poll & QN</h1>
              <span class="subheading">Go to vote and answet a questionare.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <section class="bg-light" id="poll">
        <div class="container">
            <br>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-subheading text-muted">POLLS</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-8 col-md-10 mx-auto">

                    <?php include '../connect-mysql.php';

                    $query = "SELECT * FROM pollquestion LIMIT 2";
                    //SELECT * FROM `pollquestion` ORDER BY createdate DESC LIMIT 3
                    $sql = mysqli_query($objCon,$query);
                    $result = array();
                    mysqli_set_charset($objCon,"utf8");
                    while ($row_user = mysqli_fetch_assoc($sql)){ $result[] = $row_user;}

                    foreach ($result as &$value) {
                    ?>

                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                <?php echo $value["name"]; ?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?php echo $value["detail"]; ?>
                            </h3>
                        </a>
                        <p class="post-meta">Created On
                            <a href="#"><?php echo $value["createdate"]; ?></a></p>
                    </div>
                    <hr>
                        <?php
                    }
                    ?>
                    <!-- Pager -->
                    <div class="clearfix">
                        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
                    </div>
                    <br>
                </div>
            </div>
        </div>

    </section>
    <br>
    <section class="bg-light" id="Questionare">
        <div class="container">
            <br>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-subheading text-muted">QUESTIONARES</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                Man must explore, and this is exploration at its greatest
                            </h2>
                            <h3 class="post-subtitle">
                                Problems look mighty small from 150 miles up
                            </h3>
                        </a>
                        <p class="post-meta">Created
                            <a href="#">Start Bootstrap</a>
                            on September 24, 2017</p>
                    </div>
                    <hr>
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                            </h2>
                        </a>
                        <p class="post-meta">Created
                            <a href="#">Start Bootstrap</a>
                            on September 18, 2017</p>
                    </div>
                    <hr>
                    <!-- Pager -->
                    <div class="clearfix">
                        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
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
