@extends('layouts/front')
@section('page')

<div id="initiativewrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <img class="imgitt" src="{{ secure_asset('app/img/initiative-min.jpg') }}">
            </div>
        </div>
    </div>
    <!-- container -->
</div>

<div id="commentform">
    <div class="container">
        <div class="row centerd">
            <div class="col-lg-12">
                <h3>新法案の発議</h3>
                <form action="{{ route('rules.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>タイトル（20文字以内）</label>
                        <input type="text" name="title" class="form-control" id="textBox" placeholder="タイトルを入力下さい" value="">
                        <div id="count">入力文字数: <span class="showCnt">0</span></div>
                    </div>
                    <script>
                        $('#textBox').keyup(function() {
                        let cnt = $(this).val().length;
                        $('.showCnt').text(cnt);
                        });
                    </script>
                    
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
                        <label>内容（300文字以内）</label>
                        <textarea name="content" id="textBox2" cols="30" rows="10" class="form-control" placeholder="内容を入力下さい"></textarea>
                        <div id="count">入力文字数: <span class="showCnt2">0</span></div>
                    </div>
                    <script>
                        $('#textBox2').keyup(function() {
                        let cnt = $(this).val().length;
                        $('.showCnt2').text(cnt);
                        });
                    </script>
                    @if(Auth::check())
                        <div class="form-group">
                            <button type="submit" class="btncmt">発議する</button>
                        </div>
                    @else
                        <h5>法案発議はユーザー限定です。ログインの上で発議下さい。</h5>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
