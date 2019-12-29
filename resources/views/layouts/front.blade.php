<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Spot - Bootstrap Freelance Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ secure_asset('app/img/favicon.png') }}" rel="icon">
  <link href="{{ secure_asset('app/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Raleway:400,300,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ secure_asset('app/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ secure_asset('app/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ secure_asset('app/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    Template Name: Spot
    Template URL: https://templatemag.com/spot-bootstrap-freelance-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>

  @include('inc/navbar')

  @include('inc/header')

  <div class="container w">
    <div class="row centered">
      <br><br>
      <div class="col-lg-4">
        <i class="fas fa-gavel"></i>
        <h4>投票間近</h4>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even believable.</p>
      </div>
      <!-- col-lg-4 -->

      <div class="col-lg-4">
        <i class="fa fa-laptop"></i>
        <h4>新・発議</h4>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even believable.</p>
      </div>
      <!-- col-lg-4 -->

      <div class="col-lg-4">
        <i class="fa fa-trophy"></i>
        <h4>SUPPORT</h4>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even believable.</p>
      </div>
      <!-- col-lg-4 -->
    </div>
    <!-- row -->
    <br>
    <br>
    @yield('page')
  </div>
  <!-- container -->

  <!-- PORTFOLIO SECTION -->


  @include('inc/footer')

  <!-- MODAL FOR CONTACT -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">contact us</h4>
        </div>
        <div class="modal-body">
          <div class="row centered">
            <p>We are available 24/7, so don't hesitate to contact us.</p>
            <p>
              Somestreet Ave, 987<br/> London, UK.<br/> +44 8948-4343<br/> contact@example.com
            </p>

            <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

              <div class="form-group">
                <label for="contact-name">Your Name</label>
                <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-email">Your Email</label>
                <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-subject">Subject</label>
                <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <label for="contact-message">Your Message</label>
                <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>

              <div class="loading"></div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <div class="form-send">
                <button type="submit" class="btn btn-large">Send Message</button>
              </div>

            </form>
          </div>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Spot</strong>. All Rights Reserved
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/spot-bootstrap-freelance-template/
          Licensing information: https://templatemag.com/license/
        -->
        Created with Spot template by <a href="https://templatemag.com/">TemplateMag</a>
      </div>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="{{ secure_asset('app/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ secure_asset('app/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ secure_asset('app/lib/php-mail-form/validate.js') }}"></script>
  <script src="{{ secure_asset('app/lib/chart/chart.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ secure_asset('app/js/main.js') }}"></script>

</body>
</html>
