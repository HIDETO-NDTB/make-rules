@extends('layouts/front')
@section('page')

<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-6">
                <div class="initiative-option">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container w">
    <div class="row centered">
        <div class="col-lg-12 col-xs-12">

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
                                        <li><img src="{{ asset(url($user->profile->avatar)) }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avatar"></li>
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
                            <div class="row">
                                <div class="col-lg-8"></div>
                                <div class="col-lg-4">
                                <a class="btn btn-success" style="width: 300px;" href="{{ route('vote',['id' =>$rule->id]) }}">投票に行く</a>
                            </div>
                        </ul>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</div>
@endsection
