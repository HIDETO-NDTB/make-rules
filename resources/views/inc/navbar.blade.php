<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-9">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="title" href="{{ route('index') }}">Make Rules</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-3 col-xs-3">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
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
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a class="btn btn-default" style="width:120px; margin: 10px 2px;" href="{{ route('category') }}">国　自治体</a></li>
                    <li><a class="btn btn-default" style="width:120px; margin: 10px 2px;" href="#">会社</a></li>
                    <li><a class="btn btn-default" style="width:120px; margin: 10px 2px;" href="#">学校</a></li>
                    <li><a class="btn btn-default" style="width:120px; margin: 10px 2px;" href="#">家族　親戚</a></li>
                    <li><a class="btn btn-default" style="width:120px; margin: 10px 2px;" href="#">男女　恋愛</a></li>
                </ul>
            </div>
        </div>
    </div>
        <!--/.nav-collapse -->
</div>
