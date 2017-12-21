<!DOCTYPE html>
<html lang="en">

  <head>
      <?php include '../head.html'?>
      <title>ECUP - Contact Us</title>

      <style>
          #map {
              height: 400px;
              width: 100%;
          }
      </style>

  </head>

  <body>

    <!-- Navigation -->
    <?php include '../header.php'?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('../img/360suite-contact-banner.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Contact Me</h1>
              <span class="subheading">Have questions? I have answers.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-light" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <br>
                    <h4 class="text-center">Chiang Mai Universit 239 Huay Kaew Road Muang District, Chiang Mai Thailand 50200</h4>
                    <br>
                    <div id="map"></div>
                    <br>

                    <div class="row" style="text-align: center;">
                        <div class="col-md-6">
                            <p><img src="../img/contact/Circle-icons-phone.svg.png" width="30%"></p>
                            <p>0-5394-3333</p>
                        </div>

                        <div class="col-md-6">
                            <p><img src="../img/contact/fax.png" width="30%"></p>
                            <p>0-5394-1139</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

<!-- Main Content -->
<!--    <div class="container">
<!--      <div class="row">
<!--        <div class="col-lg-8 col-md-10 mx-auto">
<!--          <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>-->
<!--          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
<!--          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
<!--          <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
<!--          <form name="sentMessage" id="contactForm" novalidate>-->
<!--            <div class="control-group">-->
<!--              <div class="form-group floating-label-form-group controls">-->
<!--                <label>Name</label>-->
<!--                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">-->
<!--                <p class="help-block text-danger"></p>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="control-group">-->
<!--              <div class="form-group floating-label-form-group controls">-->
<!--                <label>Email Address</label>-->
<!--                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">-->
<!--                <p class="help-block text-danger"></p>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="control-group">-->
<!--              <div class="form-group col-xs-12 floating-label-form-group controls">-->
<!--                <label>Phone Number</label>-->
<!--                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">-->
<!--                <p class="help-block text-danger"></p>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="control-group">-->
<!--              <div class="form-group floating-label-form-group controls">-->
<!--                <label>Message</label>-->
<!--                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>-->
<!--                <p class="help-block text-danger"></p>-->
<!--              </div>-->
<!--            </div>-->
<!--            <br>-->
<!--            <div id="success"></div>-->
<!--            <div class="form-group">-->
<!--              <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>-->
<!--            </div>-->
<!--          </form>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->

    <hr>

    <!-- Footer -->
    <?php include '../footer.php'; include '../allscript.html'?>

  </body>

  <script>
      function initMap() {
          var uluru = {lat: 18.8056207, lng: 98.9509003};
          var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 17,
              center: uluru
          });
          var marker = new google.maps.Marker({
              position: uluru,
              map: map
          });
      }
  </script>

  <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2IcUswVH6PT5yiy11ayJsPCiIjN-5_bk&callback=initMap">
  </script>

</html>
