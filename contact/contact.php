<!DOCTYPE html>
<html lang="en">

  <head>
      <?php include '../head.html'?>
      <title>ECUP - Contact Us</title>
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

    <!-- Main Content -->
    <div class="container">
      <div class="row">
          <div class="panel panel-info">
              <h2>Contact Us</h2><br>

              <h4>เลขที่ 21/5 ซอย 9(ถนนศิริมังคลาจารย์) ตำบล สุเทพ อำเภอเมือง จังหวัด เชียงใหม่ 50200</h4><br>

              <div class="row col-md-12" id="map" style="justify-content: center; width: 100%;height:400px;background:yellow"></div><br>

              <div class="row">
                  <div class="col-md-4">
                      <p><img src="../pic/facebook-icon.png" width="100px"></p>
                      <p>Facebook.com/chiangmairea</p>
                  </div>

                  <div class="col-md-4">
                      <p><img src="../pic/Hamzasaleem-Stock-Mail.ico" width="100px"></p>
                      <p>chiangmairea@gmail.com</p>
                  </div>

                  <div class="col-md-4">
                      <p><img src="../pic/Circle-icons-phone.svg.png" width="100px"></p>
                      <p>053-213708</p>
                  </div>
              </div>

          </div>

        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
          <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Phone Number</label>
                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Message</label>
                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <?php include '../footer.php'; include '../allscript.html'?>

  </body>

</html>
