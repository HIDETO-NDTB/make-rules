@extends('layouts.front')
@section('page')

<div id="initiativewrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <img src="{{ secure_asset('app/img/initiative-min.jpg') }}"  style="width:100%; height:100%;">
            </div>
        </div>
    </div>
    <!-- container -->
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
