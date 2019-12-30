@extends('layouts/front')
@section('page')

<div id="dg">
    <div class="container">
      <div class="row centered">
        <h4>LATEST RULES</h4>
        <br>
        <p>最近決議された規則です。（妄想の中で）遵守しましょう。</p>
        <div class="col-lg-4">
          <div class="tilt">
            <a href="#"><img src="{{ asset('app/img/image01.jpeg') }}" alt=""></a>
            <label>エアコンの設定温度は女性が決める</label>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="tilt">
            <a href="#"><img src="{{ asset('app/img/image01.jpeg') }}" alt=""></a>
            <label>週に一度は私服通学DAY！</label>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="tilt">
            <a href="#"><img src="{{ asset('app/img/image01.jpeg') }}" alt=""></a>
            <label>義理チョコ廃止！！</label>
          </div>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
</div>
<!-- DG -->

<!-- FEATURE SECTION -->
<div class="container wb">
    <div class="row centered">
      <br><br>
        <h4>規則討論会</h4>
        <div class="col-lg-6">
            <h5>賛成派意見</h5>


        </div>
        <div class="col-lg-6">
            <h5>反対派意見</h5>


        </div>

        <p><br/><br/></p>
      </div>
      <div class="col-lg-2"></div>
      <div class="col-lg-10 col-lg-offset-1">
        <img class="img-responsive" src="" alt="">
      </div>
    </div>
<!-- row -->
</div>
  <!-- container -->

<div id="lg">
    <div class="container">
      <div class="row centered">
        <h4>OUR AWESOME CLIENTS</h4>
        <div class="col-lg-2 col-lg-offset-1">
          <img src="{{ asset('app/img/c01.gif') }}" alt="">
        </div>
        <div class="col-lg-2">
          <img src="{{ asset('app/img/c02.gif') }}" alt="">
        </div>
        <div class="col-lg-2">
          <img src="{{ asset('app/img/c03.gif') }}" alt="">
        </div>
        <div class="col-lg-2">
          <img src="{{ asset('app/img/c04.gif') }}" alt="">
        </div>
        <div class="col-lg-2">
          <img src="{{ asset('app/img/c05.gif') }}" alt="">
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
</div>
<!-- dg -->

<div id="r">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2">
          <h4>WE ARE STORYTELLERS. BRANDS ARE OUR SUBJECTS. DESIGN IS OUR VOICE.</h4>
          <p>We believe ideas come from everyone, everywhere. At BlackTie, everyone within our agency walls is a designer in their own right. And there are a few principles we believe—and we believe everyone should believe—about our design craft. These truths
            drive us, motivate us, and ultimately help us redefine the power of design.</p>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
</div>

@endsection
