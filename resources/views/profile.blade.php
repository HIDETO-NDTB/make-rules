@extends('layouts.front')
@section('page')

<div id="initiativewrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <img src="{{ asset('app/img/initiative-min.jpg') }}"  style="width:100%; height:100%;">
            </div>
        </div>
    </div>
    <!-- container -->
</div>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-6">
            <a class="title" href="{{ route('index') }}">Make Rules</a>
        </div>
        <div class="col-lg-6 col-md-8 col-sm-12">
            <div class="navbar-collapse collapse">
                @foreach ($categories as $category)
                <ul class="nav navbar-nav">
                    <li><a class="btn btn-default" style="width:120px; margin: 10px 2px;" href="{{ route('category.single',['id' =>$category->id]) }}">{{ $category->name }}</a></li>
                </ul>
                @endforeach
            </div>
        </div>
        <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-9 col-sm-3 col-sm-offset-9 col-xs-3">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="btn btn-primary" style="width: 100px; color:white;" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="btn btn-primary dropdown-toggle" style="font-size: 14px; color: white;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>会員メニュー<span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile',['id' =>Auth::user()->id]) }}" style="font-size: 14px; color:black;">マイページ</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" style="font-size: 14px; color:red;"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
        <!--/.nav-collapse -->
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="cards">
                <div class="card-header">{{ __('マイページ') }}</div>

                <div class="card-body">
                    @if($errors->any())
                        <ul class="alert alert-danger">
                            @foreach($errors as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="username">氏名</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label for="age">年齢</label><br>
                            <input type="number" name="age" value="{{ $user->age }}">
                        </div>
                        <div class="form-group">
                            <label for="gender">性別</label>
                            <input id="gender" type="radio" name="gender" value="male">男
                            <input id="gender" type="radio" name="gender" value="female">女
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="password">新 Password （ Passwordを変更しない場合は今までのPasswordを入力して下さい。）</label>
                            <input type="password" class="form-control" name="pass">
                        </div>
                        <div class="form-group">
                            <label for="avatar">写真の追加 (数分かかる場合があります）</label>
                            <input type="file" name="avatar">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" style="width: 300px;">プロフィール更新</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
