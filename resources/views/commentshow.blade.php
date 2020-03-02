@extends('layouts.front')
@section('page')

<div class="container">
    <div class="user-table">
        <table class="table">
            <tr class="user-table">
                <th>ID</th>
                <th>意見</th>
                <th>コメント</th>
                <th>ユーザー名</th>
                <th>ルールID</th>
                <th>コメント日</th>
                <th>管理者操作</th>
            </tr>
            @foreach ($comments as $comment)
            
              <tr class="user-table">
                <td>{{ $comment->id }}</td>
                <td>{{ $comment->opinion }}</td>
                <td  class="left">{{ $comment->comment }}</td>
                <td>{{ $comment->user->name }}</td>
                <td>{{ $comment->rule_id }}</td>
                <td>{{ $comment->comment_date }}</td>
                <td><button type="submit" class="btn btn-danger" style="width: 80px;">削除</button></td>
              </tr>
            </form>
            @endforeach
        </table>
    </div>
    <p>※ 削除ボタンを押すとコメントが削除されます。元に戻すことはできません</p>
</div>

@endsection