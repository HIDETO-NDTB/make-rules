@extends('layouts/front')
@section('page')

<div id="commentwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-6">
                <div class="card2">
                    <div class="card-header"><h4><b>ベーシックインカム。全国民に毎月５万円を支給</b></h4></div>
                    <div class="card-body">
                        <ul>
                            <div class="row">
                                <div class="col-lg-2">
                                    <li><img src="{{ asset('app/img/pic3.jpg') }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avator"></li>
                                </div>
                                <div class="col-lg-2">
                                    <h5>首藤英人</h5>
                                </div>
                                <div class="col-lg-8"></div>
                            </div>
                            <div class="row">
                                <li><p>全日本国民に毎月５万円ずつ無条件で国が支給。目的は日本人がより人間らしく生きること。今までより仕事の時間を減らし趣味や芸術に打ち込むことで日本のサブカルチャー育成にも一役買うことに繋がると思われる。支給対象は日本人のみで、永住権があろうと外国人は対象とはせず。</p></li>
                            </div>
                            <div class="row">
                                <li>発議日: 2020年1月30日</li>
                                <li>投票日: 2020年2月6日</li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('app/img/comment-min.jpg') }}"  style="width:100%; height:100%;">
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
                        <label>カテゴリ</label>
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
