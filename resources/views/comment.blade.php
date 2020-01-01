@extends('layouts/front')
@section('page')

<div id="commentwrap">
    <div class="container-flued">
        <div class="row centered">
                <div class="col-lg-4">
                    <!-- START PRICING TABLE -->
                    <div class="pricing-option">
                        <div class="pricing-top">
                            <span class="pricing-edition">国　自治体<br>未投票案件数</span>
                            <span class="price">
                                <sup></sup>
                                <span class="price-amount">４</span>
                                <small>案件</small>
                            </span>
                        </div>
                        <ul>
                            <li>総発議数　<strong>９７案件</strong></li>
                            <li>投票済数　<strong>９３案件</strong></li>
                            <li>採用数　<strong>２０案件</strong></li>
                        </ul>
                    </div>
                    <!-- /pricing-option -->
                    <!-- END PRICING TABLE -->
                </div>
                <div class="col-lg-8">
                    <img src="{{ asset('app/img/header-bg.jpg') }}">

        </div>
      <!-- row -->
    </div>
    <!-- container -->
</div>

@endsection
