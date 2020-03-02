@extends('layouts.front')
@section('page')

<div class="user-table">
<table class="table">
    <tr>
        <th>ID</th>
        <th>名前</th>
        <th>年齢</th>
        <th>性別</th>
        <th>Eメール</th>
        <th>削除</th>
        <th>変更</th>
    </tr>
    @foreach ($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->age }}</td>
        <td>{{ $user->gender }}</td>
        <td>{{ $user->email }}</td>
        <td><button class="btn btn-danger">削除</button></td>
        <td><button class="btn btn-primary">変更</button></td>
      </tr>
    @endforeach
</table>
</div>

@endsection