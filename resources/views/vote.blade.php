@extends('layouts/front')
@section('page')

<div id="commentwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-6">
                <div class="card2">
                    <div class="card-header"><h4><b>{{ $rule->title }}</b></h4></div>
                    <div class="card-body">
                        <ul>
                            <div class="row">
                                <div class="col-lg-2">
                                    @foreach ($users as $user)
                                    @if($rule->user_id == $user->id)
                                    <li><img src="{{ asset(url($user->profile->avatar)) }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avator"></li>
                                    @endif
                                    @endforeach
                                </div>
                                <div class="col-lg-3">
                                    <h5>{{ $rule->user->name }}</h5>
                                </div>
                                <div class="col-lg-7"></div>
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
            <div class="col-lg-6">
                <img src="{{ asset('app/img/images.jpeg') }}"  style="width:100%; height:100%;">
            </div>
        </div>
      <!-- row -->
    </div>
    <!-- container -->
</div>

<div id="voteform">
    <div class="container">
        <div class="row centerd">
            <div class="col-lg-12">
                @if (count($errors) > 0)
    　　　　　　　    <div class="alert alert-danger">
        　　　　　　　    <ul>
            　　　　　　　    @foreach ($errors->all() as $error)
                　　　　　　　    <li>{{ $error }}</li>
            　　　　　　　    @endforeach
        　　　　　　　    </ul>
    　　　　　　　    </div>
　　　　　　　    @endif
                <form action="{{ route('votes.store') }}" method="POST">
                    @csrf
                    <div class="vote">
                        <input type="hidden" name="rule_id"  value="{{ $rule->id }}">
                    </div>
                    <div class="vote">
                        <input type="hidden" name="vote_check"  value="1">
                    </div>
                    <div class="vote">
                        @if(Auth::check())
                        @isset($vote)
                        <div class="col-lg-6">
                            <button type="submit" name="vote" class="btn btn-primary" style="width: 300px; height: 100px;" value="agree">賛成</button>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit" name="vote" class="btn btn-danger" style="width: 300px; height: 100px;" value="disagree">反対</button>
                        </div>
                        @else
                            <h5>投票はユーザー限定です。ログインの上で投票して下さい。</h5>
                        @endisset
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container w">
    <div class="row centered">
        <div class="col-lg-12">
            @foreach ($comments as $comment)
            @if($comment->rule_id == $rule->id AND $comment->opinion != "")
            <div class="card">
                <div class="card-header"><h4>{{ $comment->opinion }}派意見</h4></div>
                <div class="card-body">
                    <ul>
                        <div class="row">
                            <div class="col-lg-1">
                                @foreach ($users as $user)
                                @if($comment->user_id == $user->id)
                                <li><img src="{{ asset(url($user->profile->avatar)) }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avator"></li>
                                @endif
                                @endforeach
                            </div>
                            <div class="col-lg-2">
                                @foreach ($users as $user)
                                @if($comment->user_id == $user->id)
                                    <h5>{{ $user->name }}</h5>
                                @endif
                                @endforeach
                            </div>
                            <div class="col-lg-9"></div>
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
            @endif
            @endforeach
            <br>
        </div>
    </div>
</div>
<br>

@endsection
