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
                    <div class="form-group">
                        <input type="hidden" name="rule_id"  value="{{ $rule->id }}">
                    </div>
                    <div class="form-group">
                        <select name="vote" style="width: 200px;">
                            <option value="agree">賛成</option>
                            <option value="disagree">反対</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="vote_check"  value="true">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" style="width: 300px;">投票する</button>
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
            @if($comment->rule_id == $rule->id)
            <div class="card">
                <div class="card-header"><h4>{{ $comment->opinion }}派意見</h4></div>
                <div class="card-body">
                    <ul>
                        <div class="row">
                            <div class="col-lg-1">
                                <li><img src="{{ asset('app/img/pic3.jpg') }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avator"></li>
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
