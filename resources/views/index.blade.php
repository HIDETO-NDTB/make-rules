@extends('layouts/front')
@section('page')

<div id="dg">
    <div class="container">
      <div class="row centered">
        <h4>LATEST RULES</h4>
        <p>最近決議された規則です。（妄想の中で）遵守しましょう。</p>
        <div class="col-lg-4">
          <div class="tilt">
            <a href="#"><img src="{{ asset('app/img/image01.jpeg') }}" alt=""></a><br>
            <label>エアコンの設定温度は女性が決める</label>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="tilt">
            <a href="#"><img src="{{ asset('app/img/image01.jpeg') }}" alt=""></a><br>
            <label>週に一度は私服通学DAY！</label>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="tilt">
            <a href="#"><img src="{{ asset('app/img/image01.jpeg') }}" alt=""></a><br>
            <label>義理チョコ廃止！！</label>
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
        <h4>規則討論会</h4>
        <br>
        <div class="comments">
            <div class="col-lg-6">
                <div class="comment">
                    <div class="comment-body">
                        <h4 class="comment-title">賛成派意見</h4>
                        <p class="comment-text">条件付きですが賛成です。おかしな事件が増えているのを親のしつけの悪さが原因だとして、子供が子供を産んで育てている現状を変えた方が良いと常々思っていました。親になるからには必要最低限の経験と礼儀、そして現実を考えるとお金が必要です。</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="comment">
                    <div class="comment-body">
                        <h4 class="comment-title">反対派意見</h4>
                        <p class="comment-text">全面的に反対。少子高齢化が深刻な問題となっている日本でこのような規則を議論すること自体がおかしい。免許制にするばかりか、国がもっと適齢夫婦の出産・育児をサポートする法案が不可欠。それについては２週間以内にしっかりと考えて発議させて頂きます！！</p>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary" style="width: 300px;" href="">詳しく見る</a>
        </div>
        <br>
        <div class="comments">
            <div class="col-lg-6">
                <div class="comment">
                    <div class="comment-body">
                        <h4 class="comment-title">賛成派意見</h4>
                        <p class="comment-text">日本国民であれば無条件で国が毎月お金をくれるというのに断る理由がありますか？貰える物は何でも貰うのが私の主義です。本気で要らない人は一度貰った上でユニセフにでも寄付すれば良いのではないでしょうか？</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="comment">
                    <div class="comment-body">
                        <h4 class="comment-title">反対派意見</h4>
                        <p class="comment-text">過剰に期待している方も多いですが、国民全員にお金を配るということは、国のマネーサプライが増えるということ。国にお金が増えるとインフレになり物価が上がります。毎月５万円もらっても全体の物価が上がることから生活レベルは一緒です。結局は日本の借金が増えるだけ</p>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary" style="width: 300px;" href="">詳しく見る</a>
        </div>
        <div class="comments">
            <div class="col-lg-6">
                <div class="comment">
                    <div class="comment-body">
                        <h4 class="comment-title">賛成派意見</h4>
                        <p class="comment-text">条件付きですが賛成です。おかしな事件が増えているのを親のしつけの悪さが原因だとして、子供が子供を産んで育てている現状を変えた方が良いと常々思っていました。親になるからには必要最低限の経験と礼儀、そして現実を考えるとお金が必要です。</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="comment">
                    <div class="comment-body">
                        <h4 class="comment-title">反対派意見</h4>
                        <p class="comment-text">全面的に反対。少子高齢化が深刻な問題となっている日本でこのような規則を議論すること自体がおかしい。免許制にするばかりか、国がもっと適齢夫婦の出産・育児をサポートする法案が不可欠。それについては２週間以内にしっかりと考えて発議させて頂きます！！</p>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary" style="width: 300px;" href="">詳しく見る</a>
        </div>
        <br>
        <div class="comments">
            <div class="col-lg-6">
                <div class="comment">
                    <div class="comment-body">
                        <h4 class="comment-title">賛成派意見</h4>
                        <p class="comment-text">日本国民であれば無条件で国が毎月お金をくれるというのに断る理由がありますか？貰える物は何でも貰うのが私の主義です。本気で要らない人は一度貰った上でユニセフにでも寄付すれば良いのではないでしょうか？</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="comment">
                    <div class="comment-body">
                        <h4 class="comment-title">反対派意見</h4>
                        <p class="comment-text">過剰に期待している方も多いですが、国民全員にお金を配るということは、国のマネーサプライが増えるということ。国にお金が増えるとインフレになり物価が上がります。毎月５万円もらっても全体の物価が上がることから生活レベルは一緒です。結局は日本の借金が増えるだけ。</p>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary" style="width: 300px;" href="">詳しく見る</a>
        </div>



        <p><br/><br/></p>
      </div>
      <div class="col-lg-2"></div>
      <div class="col-lg-10 col-lg-offset-1">
        <img class="img-responsive" src="" alt="">
      </div>
    </div>
<!-- row -->
</div>
  <!-- container -->

<div id="lg">
    <div class="container">
      <div class="row centered">
        <h4>OUR AWESOME CLIENTS</h4>
        <div class="col-lg-2 col-lg-offset-1">
          <img src="{{ asset('app/img/c01.gif') }}" alt="">
        </div>
        <div class="col-lg-2">
          <img src="{{ asset('app/img/c02.gif') }}" alt="">
        </div>
        <div class="col-lg-2">
          <img src="{{ asset('app/img/c03.gif') }}" alt="">
        </div>
        <div class="col-lg-2">
          <img src="{{ asset('app/img/c04.gif') }}" alt="">
        </div>
        <div class="col-lg-2">
          <img src="{{ asset('app/img/c05.gif') }}" alt="">
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
</div>
<!-- dg -->

<div id="r">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2">
          <h4>WE ARE STORYTELLERS. BRANDS ARE OUR SUBJECTS. DESIGN IS OUR VOICE.</h4>
          <p>We believe ideas come from everyone, everywhere. At BlackTie, everyone within our agency walls is a designer in their own right. And there are a few principles we believe—and we believe everyone should believe—about our design craft. These truths
            drive us, motivate us, and ultimately help us redefine the power of design.</p>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
</div>

@endsection
