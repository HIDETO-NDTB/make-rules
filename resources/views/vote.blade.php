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
<div id="commentwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-6">
                <div class="card2">
                    <div class="card-header"><h4><b>ベーシックインカム。全国民に毎月５万円を支給</b></h4></div>
                    <div class="card-body">
                        <ul>
                            <div class="row">
                                <div class="col-lg-2">
                                    <li><img src="{{ asset('app/img/pic3.jpg') }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avator"></li>
                                </div>
                                <div class="col-lg-2">
                                    <h5>首藤英人</h5>
                                </div>
                                <div class="col-lg-8"></div>
                            </div>
                            <div class="row">
                                <li><p>全日本国民に毎月５万円ずつ無条件で国が支給。目的は日本人がより人間らしく生きること。今までより仕事の時間を減らし趣味や芸術に打ち込むことで日本のサブカルチャー育成にも一役買うことに繋がると思われる。支給対象は日本人のみで、永住権があろうと外国人は対象とはせず。</p></li>
                            </div>
                            <div class="row">
                                <li>発議日: 2020年1月30日</li>
                                <li>投票日: 2020年2月6日</li>
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
            <div class="vote">
                <div class="col-lg-6">
                    <button class="btn btn-primary" style="width: 300px; height: 100px;">賛成</button>
                </div>
                <div class="col-lg-6">
                    <button class="btn btn-danger" style="width: 300px; height: 100px;">反対</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container w">
    <div class="row centered">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><h4>賛成派意見</h4></div>
                <div class="card-body">
                    <ul>
                        <div class="row">
                            <div class="col-lg-1">
                                <li><img src="{{ asset('app/img/pic3.jpg') }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avator"></li>
                            </div>
                            <div class="col-lg-1">
                                <h5>首藤英人</h5>
                            </div>
                            <div class="col-lg-10"></div>
                        </div>
                        <div class="row">
                            <li><p>日本国民であれば無条件で国が毎月お金をくれるというのに断る理由がありますか？貰える物は何でも貰うのが私の主義です。本気で要らない人は一度貰った上でユニセフにでも寄付すれば良いのではないでしょうか？</p></li>
                        </div>
                        <div class="row">
                            <li>発言日: 2020年2月3日</li>
                        </div>
                    </ul>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header"><h4>反対派意見</h4></div>
                <div class="card-body">
                    <ul>
                        <div class="row">
                            <div class="col-lg-1">
                                <li><img src="{{ asset('app/img/pic3.jpg') }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avator"></li>
                            </div>
                            <div class="col-lg-1">
                                <h5>首藤英人</h5>
                            </div>
                            <div class="col-lg-10"></div>
                        </div>
                        <div class="row">
                            <li><p>過剰に期待している方も多いですが、国民全員にお金を配るということは、国のマネーサプライが増えるということ。国にお金が増えるとインフレになり物価が上がります。毎月５万円もらっても全体の物価が上がることから生活レベルは一緒です。結局は日本の借金が増えるだけ</p></li>
                        </div>
                        <div class="row">
                            <li>発言日: 2020年2月3日</li>
                        </div>
                    </ul>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header"><h4>反対派意見</h4></div>
                <div class="card-body">
                    <ul>
                        <div class="row">
                            <div class="col-lg-1">
                                <li><img src="{{ asset('app/img/pic3.jpg') }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avator"></li>
                            </div>
                            <div class="col-lg-1">
                                <h5>首藤英人</h5>
                            </div>
                            <div class="col-lg-10"></div>
                        </div>
                        <div class="row">
                            <li><p>過剰に期待している方も多いですが、国民全員にお金を配るということは、国のマネーサプライが増えるということ。国にお金が増えるとインフレになり物価が上がります。毎月５万円もらっても全体の物価が上がることから生活レベルは一緒です。結局は日本の借金が増えるだけ</p></li>
                        </div>
                        <div class="row">
                            <li>発言日: 2020年2月2日</li>
                        </div>
                    </ul>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header"><h4>反対派意見</h4></div>
                <div class="card-body">
                    <ul>
                        <div class="row">
                            <div class="col-lg-1">
                                <li><img src="{{ asset('app/img/pic3.jpg') }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avator"></li>
                            </div>
                            <div class="col-lg-1">
                                <h5>首藤英人</h5>
                            </div>
                            <div class="col-lg-10"></div>
                        </div>
                        <div class="row">
                            <li><p>過剰に期待している方も多いですが、国民全員にお金を配るということは、国のマネーサプライが増えるということ。国にお金が増えるとインフレになり物価が上がります。毎月５万円もらっても全体の物価が上がることから生活レベルは一緒です。結局は日本の借金が増えるだけ</p></li>
                        </div>
                        <div class="row">
                            <li>発言日: 2020年2月2日</li>
                        </div>
                    </ul>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header"><h4>賛成派意見</h4></div>
                <div class="card-body">
                    <ul>
                        <div class="row">
                            <div class="col-lg-1">
                                <li><img src="{{ asset('app/img/pic3.jpg') }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avator"></li>
                            </div>
                            <div class="col-lg-1">
                                <h5>首藤英人</h5>
                            </div>
                            <div class="col-lg-10"></div>
                        </div>
                        <div class="row">
                            <li><p>日本国民であれば無条件で国が毎月お金をくれるというのに断る理由がありますか？貰える物は何でも貰うのが私の主義です。本気で要らない人は一度貰った上でユニセフにでも寄付すれば良いのではないでしょうか？</p></li>
                        </div>
                        <div class="row">
                            <li>発言日: 2020年2月1日</li>
                        </div>
                    </ul>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
<br>

@endsection
