<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="title" href="{{ route('index') }}">Make Rules</a>
        
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">カテゴリ一覧</button>
            <ul class="dropdown-menu">
            @foreach ($categories as $category)
                <li><a class="dropdown-item" href="{{ route('category.single',['id' =>$category->id]) }}">{{ $category->name }}</a></li>
            @endforeach
            </ul>
        
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            @guest
                <li class="nav-item">
                    <a class="navbtn" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="navbtn" href="{{ route('profile',['id' =>Auth::user()->id]) }}">マイページ</a>
                </li>
                <li class="nav-item">
                    <a class="navbtn" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('ログアウト') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endguest
            </ul>
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="navbtn" href="{{ route('how_to_use') }}">利用方法</a>
                </li>
                @if(Auth::check() && Auth::user()->admin == 1)
                
                <a class="btn btn-success" href="{{ route('manage') }}" style="width: 140px">管理者メニュー</a>
                
                @endif
            </ul>
        </div>
    </div>
</div>

