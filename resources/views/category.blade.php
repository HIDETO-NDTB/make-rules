@extends('layouts/front')
@section('page')

<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-6">
                <!-- START PRICING TABLE -->
                <div class="pricing-option">
                    <div class="pricing-top">
                        <span class="pricing-edition">{{ $category->name }} 投票中</span>
                        <span class="price">
                            <span class="price-amount">{{ $just_vote }}</span>
                            <small>案件</small>
                        </span>
                    </div>
                    <ul class="top-detale">
                        <li>総発議　<strong>{{ $total_rule }} 案件</strong></li>
                        <li>コメント可能　<strong>{{ $comment_rule }} 案件</strong></li>
                        <li>開票済　<strong>{{ $finish_vote }} 案件</strong></li>
                    </ul>
                </div>
                    <!-- /pricing-option -->
                    <!-- END PRICING TABLE -->
            </div>
        </div>
      <!-- row -->
    </div>
    <!-- container -->
</div>

<div class="container w">
    <div class="row centered">
        <div class="col-lg-12 col-xs-12">
            @if($rules->count() > 0 )
            @foreach ($rules as $rule)
            @if($rule->result_date > today())
            <div class="card">
                <div class="card-header"><h4>{{ $rule->title }}</h4></div>
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
                        </div>
                        <div class="row">
                            <div class="col-lg-8"></div>
                            <div class="col-lg-4">
                                <div class="commentButton">
                                @if($rule->vote_date > today())
                                <a class="btncmt" href="{{ route('rule.single',['id' =>$rule->id]) }}">コメントする</a>
                                @elseif($rule->vote_date <= today())
                                <a class="btncmt" href="{{ route('vote',['id' =>$rule->id]) }}">投票に行く</a>
                                @endif
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            @endif
            @endforeach
            @else
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3>現在、当カテゴリの法案はありません</h3>
                </div>
            @endif
        </div>
    </div>
</div>


@endsection
