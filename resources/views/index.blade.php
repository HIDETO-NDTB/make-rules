@extends('layouts.front')
@section('page')

<!-- Fixed navbar -->



<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-6">
                <div class="initiative-option">
                    <div class="initiativeButton">
                        <a class="threebtn" href="{{ route('initiative') }}">発議する</a>
                    </div>
                    <div class="commentsButton">
                        <a class="threebtn" href="{{ route('comment_total') }}">コメント</a>
                    </div>
                    <div class="voteButton">
                        <a class="threebtn" href="{{ route('vote_total') }}">投票する</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container z">
    <div class="row centered">
    <h3>最新ニュース</h3>
        <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1">
            <h4><img src="{{ secure_asset('app/img/voteicon.png') }}">投票 <span>中</span></h4>
            <br>
            @isset($first_now_vote)
            <li><a href="{{ route('vote',['id' =>$first_now_vote->id]) }}">{{ $first_now_vote->finish_date }} 投票終了 : {{ $first_now_vote->title }}</a></li>
            @else
            <p>投票中の法案はありません。</p>
            @endisset
            @isset($second_now_vote)
            <li><a href="{{ route('vote',['id' =>$second_now_vote->id]) }}">{{ $second_now_vote->finish_date }} 投票終了 : {{ $second_now_vote->title }}</a></li>
            @endisset
            @isset($third_now_vote)
            <li><a href="{{ route('vote',['id' =>$third_now_vote->id]) }}">{{ $third_now_vote->finish_date }} 投票終了 : {{ $third_now_vote->title }}</a></li>
            @endisset
            <div class="resultButton">
                <a class="btnwhite" href="{{ route('vote_total') }}">投票中一覧</a>
            </div>
        </div>
      <!-- col-lg-4 -->
        <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1">
            <h4><img src="{{ secure_asset('app/img/commenticon.png') }}"><span>近</span>  投票</h4>
            <br>
            @isset($first_vote)
            <li><a href="{{ route('rule.single',['id' =>$first_vote->id]) }}">{{ $first_vote->vote_date }} 投票開始 : {{ $first_vote->title }}</a></li>
            @else
            <p>未投票の法案はありません。</p>
            @endisset
            @isset($second_vote)
            <li><a href="{{ route('rule.single',['id' =>$second_vote->id]) }}">{{ $second_vote->vote_date }} 投票開始 : {{ $second_vote->title }}</a></li>
            @endisset
            @isset($third_vote)
            <li><a href="{{ route('rule.single',['id' =>$third_vote->id]) }}">{{ $third_vote->vote_date }} 投票開始 : {{ $third_vote->title }}</a></li>
            @endisset
            <div class="resultButton">
                <a class="btnwhite" href="{{ route('comment_total') }}">コメント可能一覧</a>
            </div>
        </div>
        <!-- col-lg-4 -->

        <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1">
            <h4><img src="{{ secure_asset('app/img/newicon.png') }}"><span>新</span>  発議</h4>
            <br>
            @isset($first_initiative)
            <li><a href="{{ route('rule.single',['id' =>$first_initiative->id]) }}">{{ $first_initiative->initiative_date }} 発議 : {{ $first_initiative->title }}</a></li>
            @else
            <p>最近発議された法案はありません。</p>
            @endisset
            @isset($second_initiative)
            <li><a href="{{ route('rule.single',['id' =>$second_initiative->id]) }}">{{ $second_initiative->initiative_date }} 発議 : {{ $second_initiative->title }}</a></li>
            @endisset
            @isset($third_initiative)
            <li><a href="{{ route('rule.single',['id' =>$third_initiative->id]) }}">{{ $third_initiative->initiative_date }} 発議 : {{ $third_initiative->title }}</a></li>
            @endisset
            <div class="resultButton">
                <a class="btnwhite" href="{{ route('comment_total') }}">コメント可能一覧</a>
            </div>
        </div>
      <!-- col-lg-4 -->
    </div>
    <!-- row -->
    <br>
    <br>
</div>

<div id="di">
    <div class="container">
        <div class="row centered">
            <h3>開票速報</h3>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="result">
                    @isset($first_result)
                        <a href="{{ route('result',['id' =>$first_result->id]) }}">{{ $first_result->title }}</a>
                        @if($first_agree > $first_disagree)
                            <div class="resultGroup">
                                <h4 class="result-end-blue">可　決</h4>
                            </div>
                        @else
                            <div class="resultGroup">
                                <h4 class="result-end-red">否　決</h4>
                            </div>
                        @endif
                        <div class="resultGroup">
                            <li>賛成　<strong>{{ $first_agree }}票</strong></li>
                            <li>反対　<strong>{{ $first_disagree }}票</strong></li>
                        </div>
                        <div class="resultButton">
                            <a class="btnwhite" href="{{ route('result',['id' =>$first_result->id]) }}">詳しく見る</a>
                        </div>
                    @else
                        <p>最近可決された法案はありません。</p>
                    @endisset
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="result">
                    @isset($second_result)
                        <a href="{{ route('result',['id' =>$second_result->id]) }}">{{ $second_result->title }}</a>
                        @if($second_agree > $second_disagree)
                            <div class="resultGroup">
                                <h4 class="result-end-blue">可　決</h4>
                            </div>
                        @else
                            <div class="resultGroup">
                                <h4 class="result-end-red">否　決</h4>
                            </div>
                        @endif
                        <div class="resultGroup">
                            <li>賛成　<strong>{{ $second_agree }}票</strong></li>
                            <li>反対　<strong>{{ $second_disagree }}票</strong></li>
                        </div>
                        <div class="resultButton">
                            <a class="btnwhite" href="{{ route('result',['id' =>$second_result->id]) }}">詳しく見る</a>
                        </div>
                    @endisset
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="result">
                    @isset($third_result)
                        <a href="{{ route('result',['id' =>$third_result->id]) }}">{{ $third_result->title }}</a>
                        @if($third_agree > $third_disagree)
                            <div class="resultGroup">
                                <h4 class="result-end-blue">可　決</h4>
                            </div>
                        @else
                            <div class="resultGroup">
                                <h4 class="result-end-red">否　決</h4>
                            </div>
                        @endif
                        <div class="resultGroup">
                            <li>賛成　<strong>{{ $third_agree }}票</strong></li>
                            <li>反対　<strong>{{ $third_disagree }}票</strong></li>
                        </div>
                        <div class="resultButton">
                            <a class="btnwhite" href="{{ route('result',['id' =>$third_result->id]) }}">詳しく見る</a>
                        </div>
                    @endisset
                </div>
            </div>
            <div class="resulttotalButton">
                <a class="btn btn-primary" style="width: 40%;" href="{{ route('result_total') }}">開票済み一覧</a>
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
        <h4>傍聴席</h4>
        <p>現在コメント受付中の法案です。皆の意見を参考にコメントしましょう。</p>
        @foreach ($rules as $rule)
        @if($first_disagree_comment->rule_id == $rule->id && $rule->vote_date > today())
        <div class="commentsBox">
            <div class="col-lg-10">
                <div class="ruleBox">

                    <h4 class="comment-title">{{ $rule->title }}</h4>
                    <p class="comment-text">{{ $rule->content }}</p>
                    <li>発議日: {{ $rule->initiative_date }}</li>
                    <li>投票日: {{ $rule->vote_date }} 〜 {{ $rule->finish_date }}</li>

                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="comment-d">
                    <h4 class="comment-title">反対派意見</h4>
                    <p class="comment-text">{{ $first_disagree_comment->comment }}</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="comment-a">
                    <h4 class="comment-title">賛成派意見</h4>
                    @isset($first_agree_comment)
                    <p class="comment-text">{{ $first_agree_comment->comment }}</p>
                    @else
                    <p>当法案に対する賛成意見はありません。</p>
                    @endisset
                </div>
            </div>
            <div class="commentButton">
                <a class="btn btn-success" style="width: 300px;" href="{{ route('rule.single',['id' =>$first_disagree_comment->rule_id]) }}">詳しく見る</a>
            </div>
        </div>
        @endif
        @endforeach
        <br>
        @foreach ($rules as $rule)
        @if($second_disagree_comment->rule_id == $rule->id && $rule->vote_date > today())
        <div class="commentsBox">
            <div class="col-lg-10">
                <div class="ruleBox">
                    <h4 class="comment-title">{{ $rule->title }}</h4>
                    <p class="comment-text">{{ $rule->content }}</p>
                    <li>発議日: {{ $rule->initiative_date }}</li>
                    <li>投票日: {{ $rule->vote_date }} 〜 {{ $rule->finish_date }}</li>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="comment-d">
                    <h4 class="comment-title">反対派意見</h4>
                    <p class="comment-text">{{ $second_disagree_comment->comment }}</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="comment-a">
                    <h4 class="comment-title">賛成派意見</h4>
                    @isset($second_agree_comment)
                    <p class="comment-text">{{ $second_agree_comment->comment }}</p>
                    @else
                    <p>当法案に対する賛成意見はありません。</p>
                    @endisset
                </div>
            </div>
            <div class="commentButton">
                <a class="btn btn-success" style="width: 300px;" href="{{ route('rule.single',['id' =>$second_disagree_comment->rule_id]) }}">詳しく見る</a>
            </div>
        </div>
        @endif
        @endforeach
        <br>
        @foreach ($rules as $rule)
        @if($third_disagree_comment->rule_id == $rule->id && $rule->vote_date > today())
        <div class="commentsBox">
            <div class="col-lg-10">
                <div class="ruleBox">
                    <h4 class="comment-title">{{ $rule->title }}</h4>
                    <p class="comment-text">{{ $rule->content }}</p>
                    <li>発議日: {{ $rule->initiative_date }}</li>
                    <li>投票日: {{ $rule->vote_date }} 〜 {{ $rule->finish_date }}</li>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="comment-d">
                    <h4 class="comment-title">反対派意見</h4>
                    <p class="comment-text">{{ $third_disagree_comment->comment }}</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="comment-a">
                    <h4 class="comment-title">賛成派意見</h4>
                    @isset($third_agree_comment)
                    <p class="comment-text">{{ $third_agree_comment->comment }}</p>
                    @else
                    <p>当法案に対する賛成意見はありません。</p>
                    @endisset
                </div>
            </div>
            <div class="commentButton">
                <a class="btn btn-success" style="width: 300px;" href="{{ route('rule.single',['id' =>$third_disagree_comment->rule_id]) }}">詳しく見る</a>
            </div>
        </div>
        @endif
        @endforeach
        <br>
        @foreach ($rules as $rule)
        @if($fourth_disagree_comment->rule_id == $rule->id && $rule->vote_date > today())
        <div class="commentsBox">
            <div class="col-lg-10">
                <div class="ruleBox">
                    <h4 class="comment-title">{{ $rule->title }}</h4>
                    <p class="comment-text">{{ $rule->content }}</p>
                    <li>発議日: {{ $rule->initiative_date }}</li>
                    <li>投票日: {{ $rule->vote_date }} 〜 {{ $rule->finish_date }}</li>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="comment-d">
                    <h4 class="comment-title">反対派意見</h4>
                    <p class="comment-text">{{ $fourth_disagree_comment->comment }}</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="comment-a">
                    <h4 class="comment-title">賛成派意見</h4>
                    @isset($fourth_agree_comment)
                    <p class="comment-text">{{ $fourth_agree_comment->comment }}</p>
                    @else
                    <p>当法案に対する賛成意見はありません。</p>
                    @endisset
                </div>
            </div>
            <div class="commentButton">
                <a class="btn btn-success" style="width: 300px;" href="{{ route('rule.single',['id' =>$fourth_disagree_comment->rule_id]) }}">詳しく見る</a>
            </div>
        </div>
        @endif
        @endforeach
        <br>
        @foreach ($rules as $rule)
        @if($fifth_disagree_comment->rule_id == $rule->id && $rule->vote_date > today())
        <div class="commentsBox">
            <div class="col-lg-10">
                <div class="ruleBox">
                    <h4 class="comment-title">{{ $rule->title }}</h4>
                    <p class="comment-text">{{ $rule->content }}</p>
                    <li>発議日: {{ $rule->initiative_date }}</li>
                    <li>投票日: {{ $rule->vote_date }} 〜 {{ $rule->finish_date }}</li>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="comment-d">
                    <h4 class="comment-title">反対派意見</h4>
                    <p class="comment-text">{{ $fifth_disagree_comment->comment }}</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="comment-a">
                    <h4 class="comment-title">賛成派意見</h4>
                    @isset($fifth_agree_comment)
                    <p class="comment-text">{{ $fifth_agree_comment->comment }}</p>
                    @else
                    <p>当法案に対する賛成意見はありません。</p>
                    @endisset
                </div>
            </div>
            <div class="commentButton">
                <a class="btn btn-success" style="width: 300px;" href="{{ route('rule.single',['id' =>$fifth_disagree_comment->rule_id]) }}">詳しく見る</a>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <!-- row -->
</div>
  <!-- container -->

<div id="lg">
    <div class="container">
        <div class="row centered">
            <h4>管理者より</h4>
            <div class="col-lg-6 col-lg-offset-2">
                <p>2020.1.23 Make Rulesリリース</p>
                <p>2020.1.25 コメント中、投票中、開票済み一覧を追加</p>
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
