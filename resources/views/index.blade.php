@extends('layouts.front')
@section('page')

<!-- Fixed navbar -->



<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-6">
                <div class="initiative-option">
                    <div class="initiative-top">
                        <a class="btn btn-danger" style="width: 300px;" href="{{ route('initiative') }}">新法案を発議する</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container z">
    <div class="row centered">
        <br><br>
        <div class="col-lg-4">
            <h4><i class="fas fa-hammer"></i><span>近</span>  投票</h4>
            <br>
            @isset($first_vote)
            <li><a href="{{ route('rule.single',['id' =>$first_vote->id]) }}">{{ $first_vote->title }}<br>({{ $first_vote->vote_date }} 投票)</a></li><br>
            @else
            <p>未投票の法案はありません。</p>
            @endisset
            @isset($second_vote)
            <li><a href="{{ route('rule.single',['id' =>$second_vote->id]) }}">{{ $second_vote->title }}<br>({{ $second_vote->vote_date }} 投票)</a></li><br>
            @endisset
            @isset($third_vote)
            <li><a href="{{ route('rule.single',['id' =>$third_vote->id]) }}">{{ $third_vote->title }}<br>({{ $third_vote->vote_date }} 投票)</a></li><br>
            @endisset
        </div>
        <!-- col-lg-4 -->

        <div class="col-lg-4">
            <h4><i class="far fa-folder-open"></i><span>新</span>  発議</h4>
            <br>
            @isset($first_initiative)
            <li><a href="{{ route('rule.single',['id' =>$first_initiative->id]) }}">{{ $first_initiative->title }}<br>( {{ $first_initiative->initiative_date }} 発議 )</a></li><br>
            @else
            <p>最近発議された法案はありません。</p>
            @endisset
            @isset($second_initiative)
            <li><a href="{{ route('rule.single',['id' =>$second_initiative->id]) }}">{{ $second_initiative->title }}<br>( {{ $second_initiative->initiative_date }} 発議 )</a></li><br>
            @endisset
            @isset($third_initiative)
            <li><a href="{{ route('rule.single',['id' =>$third_initiative->id]) }}">{{ $third_initiative->title }}<br>( {{ $third_initiative->initiative_date }} 発議 )</a></li><br>
            @endisset
        </div>
      <!-- col-lg-4 -->

        <div class="col-lg-4">
            <h4><i class="fas fa-search-location"></i><span>熱</span>  注目</h4>
            <br>
            <li><a href="#">出産を免許制にしませんか？<br>（コメント数９７件）</a></li><br>
            <li><a href="#">ベーシックインカム。全国民に月５万円支給<br>（コメント数７３件）</a></li><br>
            <li><a href="#">周国家主席は国賓として迎えましょう<br>（コメント数５６件）</a></li><br>
        </div>
      <!-- col-lg-4 -->
    </div>
    <!-- row -->
    <br>
    <br>
</div>

<div id="dg">
    <div class="container">
      <div class="row centered">
        <h4>LATEST RULES</h4>
        <p>最近可決された法案です。（妄想の中で）遵守しましょう。</p>
        <div class="col-lg-4">
          <div class="tilt">

            <img src="{{ asset('app/img/image01.jpeg') }}" alt="image"><br>
            @isset($first_result)
            <a href="{{ route('result',['id' =>$first_result->id]) }}">{{ $first_result->title }}</a>
            @else
            <p>最近可決された法案はありません。</p>
            @endisset
          </div>
        </div>

        <div class="col-lg-4">
          <div class="tilt">
            @isset($second_result)
            <img src="{{ asset('app/img/image01.jpeg') }}" alt="image"><br>
            <a href="{{ route('result',['id' =>$second_result->id]) }}">{{ $second_result->title }}</a>
            @endisset
          </div>
        </div>

        <div class="col-lg-4">
            <div class="tilt">
              @isset($third_result)
              <img src="{{ asset('app/img/image01.jpeg') }}" alt="image"><br>
              <a href="{{ route('result',['id' =>$third_result->id]) }}">{{ $third_result->title }}</a>
              @endisset
            </div>
          </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
</div>
<!-- DG -->

<!-- FEATURE SECTION -->
<div class="container wb">
    <div class="row centered">
        <br>
        <h4>傍聴席</h4>
        <br>
        <div class="commentsBox">
            <div class="col-lg-6">
                <div class="comment-a">
                    <h4 class="comment-title">賛成派意見</h4>
                    <p class="comment-text">条件付きですが賛成です。おかしな事件が増えているのを親のしつけの悪さが原因だとして、子供が子供を産んで育てている現状を変えた方が良いと常々思っていました。親になるからには必要最低限の経験と礼儀、そして現実を考えるとお金が必要です。</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="comment-d">
                    <h4 class="comment-title">反対派意見</h4>
                    <p class="comment-text">全面的に反対。少子高齢化が深刻な問題となっている日本でこのような規則を議論すること自体がおかしい。免許制にするばかりか、国がもっと適齢夫婦の出産・育児をサポートする法案が不可欠。それについては２週間以内にしっかりと考えて発議させて頂きます！！</p>
                </div>
            </div>
            <a class="btn btn-primary" style="width: 300px; text-align: center;" href="">詳しく見る</a>
        </div>
        <br>
    </div>
    <!-- row -->
</div>
  <!-- container -->

<div id="lg">
    <div class="container">
        <div class="row centered">
            <h4>管理者より</h4>
            <div class="col-lg-6 col-lg-offset-2">
                <a href="">2020.1.27 Make Rulesリリースのお知らせ</a><br>
                <br>
                <a href="">2020.1.31 不具合修正のお知らせ</a><br>
                <br>
                <a href="">2020.2.2 当webサービスの利用方法に関するお知らせ</a><br>
                <br>
            </div>
            <div class="col-lg-4">
                <div class="contact">
                    <a class="btn btn-info" style="width: 300px;" href="{{ route ('contact') }}">各種お問い合わせはこちらから</a>
                </div>
            </div>
         <!-- row -->
        </div>
    </div>
    <!-- container -->
</div>
<!-- dg -->

@endsection
