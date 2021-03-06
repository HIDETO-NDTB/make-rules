@extends('layouts/front')
@section('page')

<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-6">
                <!-- START PRICING TABLE -->
                <div class="pricings-option">
                    <div class="pricings-top">
                        <span class="pricings-edition">開票済み一覧</span>
                        <span class="prices">
                            <span class="prices-amount">{{ $result_total }}</span>
                            <small>案件</small>
                        </span>
                        <p>直近開票済み３０案件まで表示されます</p>
                    </div>
                </div>
                    <!-- /pricing-option -->
                    <!-- END PRICING TABLE -->
            </div>
        </div>
      <!-- row -->
    </div>
    <!-- container -->
</div>

<div class="container">
    <div class="row centered">
        <div class="mobile-option">
            <div class="mobile-top">
                <h4>開票済み一覧</h4>
            </div>
            <div class="mobile-detale">
                <h4>{{ $result_total }} 案件</h4>
            </div>
            <p>直近３０案件まで表示されます</p>
        </div>
    </div>
</div>

<div class="container w">
    <div class="row centered">
        <div class="col-lg-12">

            @foreach ($rules as $rule)
                <div class="card">
                    <div class="card-header"><h4>{{ $rule->title }}</h4></div>
                    <div class="category"><h4>{{ $rule->category->name }}</h4></div>
                    <div class="card-body">
                        <ul>
                            <div class="row">
                                <div class="col-lg-1">
                                    @foreach ($users as $user)
                                    @if($rule->user_id == $user->id)
                                        <li><img src="{{ secure_asset(url($user->profile->avatar)) }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avatar"></li>
                                    @endif
                                    @endforeach
                                </div>
                                <div class="col-lg-2">
                                    <h5>{{ $rule->user->name }}</h5>
                                </div>
                                <div class="col-lg-9"></div>
                            </div>
                            <div class="row">
                                <li><p>{{ $rule->content }}</p></li>
                            </div>
                            <div class="row">
                                <li>発議日: {{ $rule->initiative_date }}</li>
                                <li>投票日: {{ $rule->vote_date }} 〜 {{ $rule->finish_date }}</li>
                                <li>開票日: {{ $rule->result_date }}</li>
                            </div>
                            <div class="resultButton">
                                <a class="btncmtttl" href="{{ route('result',['id' =>$rule->id]) }}">開票結果を見る</a>
                            </div>
                        </ul>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</div>
@endsection
