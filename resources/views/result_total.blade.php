@extends('layouts/front')
@section('page')

<div id="commentwrap">
    <div class="container">
        @foreach ($rules as $rule)
        <div class="row centered">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card2">
                    <div class="card-header"><h4><b>{{ $rule->title }}</b></h4></div>
                    <div class="card-body">
                        <ul>
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                                    @foreach ($users as $user)
                                    @if($rule->user_id == $user->id)
                                    <li><img src="{{ asset(url($user->profile->avatar)) }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avator"></li>
                                    @endif
                                    @endforeach
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                    <h5>{{ $rule->user->name }}</h5>
                                </div>
                                <div class="col-lg-7 col-md-6 col-sm-4 col-xs-4"></div>
                            </div>
                            <div class="row">
                                <li><p>{{ $rule->content }}</p></li>
                            </div>
                            <div class="row">
                                <li>発議日: {{ $rule->initiative_date }}</li>
                                <li>投票日: {{ $rule->vote_date }} 〜 {{ $rule->finish_date }}</li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="resulttitle">
                    <div class="container">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h4>開票結果</h4>
                            <p>開票日　{{ $rule->result_date }}</p>
                        </div>
                    </div>
                </div>

                <div id="resultform">
                    <div class="container">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                @if($total_vote->id == $total_agree->id == $total_disagree == $rule->id)
                                <div class="result-option">
                                    @if($total_agree > $total_disagree)
                                        <div class="result-top-blue">
                                            <span class="result-amount">可　決</span>
                                        </div>
                                    @else
                                        <div class="result-top-red">
                                            <span class="result-amount">否　決</span>
                                        </div>
                                    @endif
                                    <div class="result-content">
                                        <li>総投票数　<strong>{{ $total_vote }}票</strong></li>
                                        <li>賛成　<strong>{{ $total_agree }}票</strong></li>
                                        <li>反対　<strong>{{ $total_disagree }}票</strong></li>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container x">
                    <div class="row centered">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @foreach ($comments as $comment)
                            @if($comment->rule_id == $rule->id AND $comment->opinion != "")
                            <div class="card">
                                <div class="card-header"><h4>{{ $comment->opinion }}派意見</h4></div>
                                <div class="card-body">
                                    <ul>
                                        <div class="row">
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                                @foreach ($users as $user)
                                                @if($comment->user_id == $user->id)
                                                <li><img src="{{ asset(url($user->profile->avatar)) }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avator"></li>
                                                @endif
                                                @endforeach
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                                @foreach ($users as $user)
                                                @if($comment->user_id == $user->id)
                                                    <h5>{{ $user->name }}</h5>
                                                @endif
                                                @endforeach
                                            </div>
                                            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-4"></div>
                                        </div>
                                        <div class="row">
                                            <li><p>{{ $comment->comment }}</p></li>
                                        </div>
                                        <div class="row">
                                            <li>コメント日: {{ $comment->comment_date }}</li>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <br>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
