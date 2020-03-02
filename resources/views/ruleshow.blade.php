@extends('layouts.front')
@section('page')

<div class="container">
    <div class="user-table">
    <form action="{{ route('rules.destroy',['id' =>$rule->id]) }}" method="post">
    @csrf
    @method('DELETE')
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
                <td><button type="submit" class="btn btn-danger" style="width: 80px;">削除</button></td>
              </tr>
            @endforeach
        </table>
    </form>
    </div>
    <p>※ 削除ボタンを押すとルールが削除されます。元に戻すことはできません</p>
</div>

@endsection