<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Make Rules</title>
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

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

  @yield('page')

  @include('inc/header')

  @include('inc/new')
  <!-- container -->

  <!-- PORTFOLIO SECTION -->



  @include('inc/footer')

  <!-- MODAL FOR CONTACT -->
  <!-- Modal -->
  <!-- /.modal -->

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Make Rules</strong>. All Rights Reserved
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
