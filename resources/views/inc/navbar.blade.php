<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="title" href="{{ route('index') }}">Make Rules</a>
    
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            @foreach ($categories as $category)
                <li><a class="navbtn" href="{{ route('category.single',['id' =>$category->id]) }}">{{ $category->name }}</a></li>
            @endforeach
            @guest
                <li class="nav-item">
                    <a class="navbtn" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="navbtn" href="{{ route('profile',['id' =>Auth::user()->id]) }}">マイページ</a>
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
        </div>
    </div>
</div>

