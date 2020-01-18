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
                                    <li><img src="{{ asset('app/img/pic3.jpg') }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avator"></li>
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
                                <li>投票日: {{ $rule->vote_date }}</li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('app/img/comment-min.jpg') }}"  style="width:100%; height:100%;">
            </div>
        </div>
      <!-- row -->
    </div>
    <!-- container -->
</div>

<div id="commentform">
    <div class="container">
        <div class="row centerd">
            <div class="col-lg-12">
                <form action="{{ route('comments.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="rule_id"  value="{{ $rule->id }}">
                    <div class="form-group">
                        <select name="opinion" style="width: 200px;">
                            <option value="賛成">賛成</option>
                            <option value="反対">反対</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="comment" id="comment" cols="30" rows="10" class=form-control placeholder="コメントを入力下さい"></textarea>
                    </div>
                    @if(Auth::check())
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" style="width: 300px;">コメントする</button>
                    </div>
                    @else
                        <h5>コメントはユーザー限定です。ログインの上でコメントして下さい。</h5>
                    @endif
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
                                <li><img src="{{ isset($user)? asset($user->profile->avatar) : Auth::user()->profile->avatar }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="{{ Auth::user()->name }}"></li>
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
                            <li>コメント日　{{ $comment->comment_date }}</li>
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
<br>

@endsection
