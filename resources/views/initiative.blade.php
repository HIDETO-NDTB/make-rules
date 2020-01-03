@extends('layouts/front')
@section('page')

<div id="commentwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <img src="{{ asset('app/img/initiative-min.jpg') }}"  style="width:100%; height:100%;">
            </div>
        </div>
      <!-- row -->
    </div>
    <!-- container -->
</div>

<div id="commentform">
    <div class="container">
        <div class="row centerd">
            <div class="col-lg-12">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>タイトル（●文字以内）</label>
                        <input type="text" name="title" class="form-control" placeholder="タイトルを入力下さい">
                    </div>
                    <div class="form-group">
                        <label>カテゴリ</label><br>
                        <select name="category" style="width: 200px;">
                            <option value="country">国 自治体</option>
                            <option value="company">会社</option>
                            <option value="school">学校</option>
                            <option value="family">家族 親戚</option>
                            <option value="love">男女 恋愛</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>内容（●文字以内）</label>
                        <textarea name="content" id="" cols="30" rows="10" class="form-control" placeholder="内容を入力下さい"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger" style="width: 300px;">発議する</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
