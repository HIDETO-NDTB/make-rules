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
                    <div class="card-header"><h4><b>エアコンの設定温度は女性が決める</b></h4></div>
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
                                <li><p>長く議論されてきた男女の温度差に決着をつけませんか？ 私は男ですが、やはり温度管理は女性に任せた方が世の中うまくいくと思います。</p></li>
                            </div>
                            <div class="row">
                                <li>発議日: 2020年1月25日</li>
                                <li>投票日: 2020年2月1日</li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('app/img/image01.jpeg') }}"  style="width:100%; height:100%;">
            </div>
        </div>
      <!-- row -->
    </div>
    <!-- container -->
</div>

<div class="resulttitle">
    <div class="container">
        <div class="col-lg-12">
            <h4>開票結果</h4>
            <p>投票日　２０２０年２月１日</p>
        </div>
    </div>
</div>

<div id="resultform">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-6 col-xs-12">
                <img src="{{ asset('app/img/approved-min.jpg') }}"  style="width:80%; height:80%;">
            </div>
            <div class="col-lg-6 col-xs-12">
                <div class="result-option">
                    <div class="result-top">
                        <span class="result-amount">可 決</span>
                    </div>
                    <div class="result-content">
                        <li>総投票数　<strong>９７票</strong></li>
                        <li>賛成　<strong>５７票</strong></li>
                        <li>反対　<strong>４０票</strong></li>
                    </div>
                </div>
            </div>

        </div>
        <!-- row -->
    </div>
</div>

<div class="container x">
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
                            <li><p>賛成です。男性は暑ければ上着を脱ぐなりできますが、女性は着る服によってはそれができないこともありますし・・・。レディファストの精神ですね。</p></li>
                        </div>
                        <div class="row">
                            <li>発言日: 2020年1月31日</li>
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
                            <li><p>どっちでも良いとの立場ですが、強いて言えば反対。そもそもそこを規則化する必要ありますか？</p></li>
                        </div>
                        <div class="row">
                            <li>発言日: 2020年1月31日</li>
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
                            <li><p>どっちでも良いとの立場ですが、強いて言えば反対。そもそもそこを規則化する必要ありますか？</p></li>
                        </div>
                        <div class="row">
                            <li>発言日: 2020年2月1日</li>
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
                            <li><p>どっちでも良いとの立場ですが、強いて言えば反対。そもそもそこを規則化する必要ありますか？</p></li>
                        </div>
                        <div class="row">
                            <li>発言日: 2020年2月1日</li>
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
                            <li><p>賛成です。男性は暑ければ上着を脱ぐなりできますが、女性は着る服によってはそれができないこともありますし・・・。レディファストの精神ですね。</p></li>
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
