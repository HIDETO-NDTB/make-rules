@extends('layouts.front')
@section('page')

<div class="container">
    <div class="user-table">
        <table class="table">
            <tr class="user-table">
                <th>ID</th>
                <th>名前</th>
                <th>年齢</th>
                <th>性別</th>
                <th>Eメール</th>
                <th>管理者操作</th>
            </tr>
            @foreach ($users as $user)
              <tr class="user-table">
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->email }}</td>
                <td><a class="btn btn-danger" href="{{ route('users.show',['id' =>$user->id]) }}" style="width: 100px;">削除</a></td>
              </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection