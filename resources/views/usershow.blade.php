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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="cards">
                <h3>削除ページ</h3>

                <div class="card-body">
                    @if($errors->any())
                        <ul class="alert alert-danger">
                            @foreach($errors as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form action="{{ route('users.destroy',['id' =>$user->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="form-group">
                            <label for="username">氏名</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label for="age">年齢</label><br>
                            <input type="number" name="age" value="{{ $user->age }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="pass" value="{{ $user->password }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btncmt2">上記ユーザーの削除</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
