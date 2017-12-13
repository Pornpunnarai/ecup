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
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="../img/activity/trekking.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Chiang Mai Trekking Read more</h4>
                        <p class="text-muted">With such picturesque beauty
                            close at hand, it's no wonder that trekking tops
                            the list of popular things to do in Chiang Mai.</p><br>
                        <a href="#" class="btn-sm btn-warning">Read More</a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="../img/activity/aventure.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Adventure Sports in Chiang Mai</h4>
                        <p class="text-muted">Chiang Mai's vast natural landscape is like a playground
                            for adventurous sport enthusiasts. Never thought you'd try rock.</p><br>
                        <a href="#" class="btn-sm btn-warning">Read More</a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="../img/activity/cycling.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Cycling in Chiang Mai</h4>
                        <p class="text-muted">Peddling off the well-beaten tourist track, a cycling
                            tour in Chiang Mai and beyond offers an immediate connection to . . .</p><br>
                        <a href="#" class="btn-sm btn-warning">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="../img/activity/golf.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Golf in Chiang Mai</h4>
                        <p class="text-muted">Chiang Mai is home to several excellent golf courses created by
                            some of the top designers in Asia. The lovely northern</p><br>
                        <a href="#" class="btn-sm btn-warning">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="../img/activity/spa.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Chiang Mai Spa & Massage</h4>
                        <p class="text-muted">Anyone who comes to Thailand will be struck by the
                            availability of massage and how reasonable it is to have your weary</p><br>
                        <a href="#" class="btn-sm btn-warning">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="../img/activity/exercise.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Health & Fitness</h4>
                        <p class="text-muted">Most gyms in Chiang Mai
                            are well equipped with weight machines,
                            exercise bikes and stair masters. Many offer aerobics</p><br>
                        <a href="#" class="btn-sm btn-warning">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>
    <!-- Footer -->
    <?php include '../footer.php'?>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <h2 class="text-uppercase">Chiang Mai Trekking Read more</h2>
<!--                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                                <img class="img-fluid d-block mx-auto" src="../img/activity/trekking.jpg" alt="">
                                <p>A Bu Ja !!! We have two different for day trip. No.1 visit waterfall, jungle trekking 2 hrs,
                                    White water rafting, play with elephant, feed food, no riding. No.2 one day only walk =
                                    visit Karen hill tribe village, trek 3-3. hrs to waterfall, is located in Inthanon national park area.</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
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
