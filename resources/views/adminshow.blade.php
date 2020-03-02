@extends('layouts.front')
@section('page')

<div class="user-table">
<table>
    <tr>
        <th>ID</th>
        <th>名前</th>
        <th>年齢</th>
        <th>性別</th>
        <th>Eメール</th>
    </tr>
    @foreach ($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->age }}</td>
        <td>{{ $user->gender }}</td>
        <td>{{ $user->email }}</td>
      </tr>
    @endforeach
</table>
</div>

@endsection