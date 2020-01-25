<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="title" href="{{ route('index') }}">Make Rules</a>
        </div>
        <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-9 col-sm-offset-0 col-xs-6 col-xs-offset-0">
            <div class="navbar-collapse collapse">
                @foreach ($categories as $category)
                <ul class="nav navbar-nav">
                    <li><a class="btn btn-default" style="width:105px; margin: 10px 2px;" href="{{ route('category.single',['id' =>$category->id]) }}">{{ $category->name }}</a></li>
                </ul>
                @endforeach
            </div>
        </div>
        <div class="col-lg-3 col-lg-offset-0 col-md-4 col-md-offset-8 col-sm-12 col-sm-offset-0 col-xs-6 col-xs-offset-0">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-collapse collapse">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="btn btn-primary" style="font-size: 14px; width: 100px; color:white;" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                    </li>
                @else
                    <li class="nav-item">
                        <div class="userButton">
                            <a class="btn btn-primary" href="{{ route('profile',['id' =>Auth::user()->id]) }}" style="font-size: 14px; color:white; width:100px;">マイページ</a>
                            <a class="btn btn-danger" href="{{ route('logout') }}" style="font-size: 14px; color:white; width:100px;"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('ログアウト') }}
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

