<!DOCTYPE html>
  <html lang="en">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158164428-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-158164428-2');
  </script>

  <meta property="og:site_name" content="make-rules" />
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://make-rules.com/" />
  <meta property="og:title" content="make-rules" />
  <meta property="og:description" content="あればイイなという規則を発議後、1週間で投票。自分が1mm成長したことに気づくWebサービス。" />
  <meta property="og:image" content="https://makerules.s3.us-east-2.amazonaws.com/themis-min(short).jpg" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta property="fb:app_id" content="536521323652012">

  <meta charset="utf-8">
  <title>Make Rules</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <meta name="keywords"　content="rule,規則,法案,発議,コメント,投票,開票,開票速報,Webサービス" />
  <meta name="description" content="あればイイなという規則や廃止したい規則を発議後、1週間皆で賛成・反対を協議。そして更に1週間の投票の結果、新しい規則ができる。新しい規則ができても世の中は全く変わらないが、自分が1mmだけ成長したことに気づくWebサービス。" />

  <!-- Favicons -->
  <link href="{{ asset('app/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('app/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Raleway:400,300,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('app/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('app/css/style.css') }}" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="{{ asset('js/textCount.js') }}"></script>

  

  <!-- =======================================================
    Template Name: Spot
    Template URL: https://templatemag.com/spot-bootstrap-freelance-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>



<body>


  @include('inc/navbar')

  <!-- container -->

  <!-- PORTFOLIO SECTION -->
  @yield('page')



  <!-- include('inc/footer') -->

  <!-- MODAL FOR CONTACT -->
  <!-- Modal -->
  <!-- /.modal -->

  @include('inc/copyrights')

  <!-- JavaScript Libraries -->
  <script src="{{ asset('app/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('app/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('app/lib/php-mail-form/validate.js') }}"></script>
  <script src="{{ asset('app/lib/chart/chart.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('app/js/main.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script>
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success')}}")
    @endif
    @if (Session::has('warning'))
        toastr.warning("{{ Session::get('warning')}}")
    @endif
  </script>

</body>
</html>
