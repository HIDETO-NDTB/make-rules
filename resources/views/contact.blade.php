@extends('layouts/front')
@section('page')

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="title" href="{{ route('index') }}">Make Rules</a>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="navbar-collapse collapse">
                @foreach ($categories as $category)
                <ul class="nav navbar-nav">
                    <li><a class="btn btn-default" style="width:120px; margin: 10px 2px;" href="{{ route('category.single',['id' =>$category->id]) }}">{{ $category->name }}</a></li>
                </ul>
                @endforeach
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-3 col-xs-12">
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

<div id="contactform">
    <div class="container">
        <div class="row centerd">
            <div class="col-lg-12">
                <h4><span> お問い合わせフォーム </span></h4>
                <p>Make Rulesをご利用頂き、誠にありがとうございます。<br>皆様より頂戴した貴重なご意見は今後の運営に活かして参ります。</p>
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>カテゴリ</label><br>
                        <select name="category" style="width: 400px;">
                            <option value="country">Make Rules に関するお問い合わせ</option>
                            <option value="company">不具合報告</option>
                            <option value="school">広告に関するお問い合わせ</option>
                            <option value="family">ビジネスに関するお問い合わせ</option>
                            <option value="love">その他のお問い合わせ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>氏名</label><br>
                        <input type="text" name="name" stile="width: 400px">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>お問い合わせ内容（●文字以内）</label>
                        <textarea name="content" id="" cols="30" rows="10" class="form-control" placeholder="内容を入力下さい"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger" style="width: 300px;">送信する</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
