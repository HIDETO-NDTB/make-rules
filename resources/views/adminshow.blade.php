@extends('layouts.front')
@section('page')

<table class="table user-table">
    <tr>
        <th>ID</th>
        <th>名前</th>
        <th>年齢</th>
        <th>性別</th>
        <th>Eメール</th>
    </tr>
    <tr>
      @foreach ($users as $user)
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->age }}</td>
        <td>{{ $user->gender }}</td>
        <td>{{ $user->email }}</td>
      @endforeach
    </tr>
</table>


@endsection