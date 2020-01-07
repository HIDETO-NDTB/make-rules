@extends('layouts/front')
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

<div id="commentform">
    <div class="container">
        <div class="row centerd">
            <div class="col-lg-12">
                <h4><span> 新法案の発議 </span></h4>
                    <form action="{{ route('rules.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>タイトル（20文字以内）</label>
                            <input type="text" name="title" class="form-control" placeholder="タイトルを入力下さい">
                        </div>
                        <div class="form-group">
                            <label>カテゴリ</label><br>
                            <select name="category_id" style="width: 200px;">
                                <option value="1">国 自治体</option>
                                <option value="2">会社</option>
                                <option value="3">学校</option>
                                <option value="4">家族 親戚</option>
                                <option value="5">男女 恋愛</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>内容（●文字以内）</label>
                            <textarea name="content" id="" cols="30" rows="10" class="form-control" placeholder="内容を入力下さい"></textarea>
                        </div>
                        @if(Auth::check())
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger" style="width: 300px;">発議する</button>
                            </div>
                    </form>
                @else
                    <h5>申し訳ありません。ログインの上で発議下さい。</h5>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
