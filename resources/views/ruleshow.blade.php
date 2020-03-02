@extends('layouts.front')
@section('page')

<div class="user-table">
<table class="table">
    <tr class="user-table">
        <th>ID</th>
        <th>Title</th>
        <th>内容</th>
        <th>カテゴリ</th>
        <th>ユーザー名</th>
        <th>発議日</th>
        <th>管理者操作</th>
    </tr>
    @foreach ($rules as $rule)
      <tr class="user-table">
        <td>{{ $rule->id }}</td>
        <td  class="left">{{ $rule->title }}</td>
        <td  class="left">{{ $rule->content }}</td>
        <td>{{ $rule->category->name }}</td>
        <td>{{ $rule->user->name }}</td>
        <td>{{ $rule->initiative_date }}</td>
        <td><a class="btn btn-danger" href="" style="width: 100px;">削除</a></td>
      </tr>
    @endforeach
</table>
</div>

@endsection