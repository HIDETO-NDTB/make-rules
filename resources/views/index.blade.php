@extends('layouts/front')
@section('page')

<div id="dg">
    <div class="container">
      <div class="row centered">
        <h4>LATEST RULES</h4>
        <p>最近決議された規則です。（妄想の中で）遵守しましょう。</p>
        <div class="col-lg-4">
          <div class="tilt">
            <a href="#"><img src="{{ asset('app/img/image01.jpeg') }}" alt=""></a>
            <label>エアコンの設定温度は女性が決める</label>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="tilt">
            <a href="#"><img src="{{ asset('app/img/image01.jpeg') }}" alt=""></a>
            <label>週に一度は私服通学DAY！</label>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="tilt">
            <a href="#"><img src="{{ asset('app/img/image01.jpeg') }}" alt=""></a>
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
        <br>
        <div class="comments">
            <div class="col-lg-6">
                <div class="comment">
                    <div class="comment-body">
                        <h4 class="comment-title">賛成派意見</h4>
                        <p class="comment-text">いまや日本は世界においてかれています。１人あたりGDPも確かに一つの指標ですが、生産力×人口がいわゆる成長力です。いい加減働き方改革などやめて、国民全残業の勢いで仕事しないと日本は浮上しないよ。</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="comment">
                    <div class="comment-body">
                        <h4 class="comment-title">反対派意見</h4>
                        <p class="comment-text">正に時代に逆行する考え方。せっかく定時帰宅、有給休暇取得など普通のことが普通にできるようになったのに、また昭和に戻るつもりですか？失礼ながらおじさんの意見を押し付けるのは会社だけにして欲しい！</p>
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
                        <p class="comment-text">男女・恋人カテゴリはエロかおのろけかしかないかと思ってましたが、ようやくまともな発議がきましたね。日本人女性の社会的地位が低いことはニュースでご存知のことと思いますが、地位向上もまずは家庭からです。女性は今こそ立ち上がり、権利を主張すべきです。</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="comment">
                    <div class="comment-body">
                        <h4 class="comment-title">反対派意見</h4>
                        <p class="comment-text">やいや、もはや女性の方が強いでしょ（笑）。普段はめちゃくちゃ強いくせして、重い荷物が目の前に現れた途端、「持てなーい」みたいな空気を出して男を見てくる。もはや日本人女性は地上最強です。い</p>
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
            <h4>管理者より</h4>
            <div class="col-lg-8">
                <a href="">2020.1.28 Make Rulesリリースのお知らせ</a><br>
                <br>
                <a href="">2020.1.31 不具合修正のお知らせ</a><br>
                <br>
                <a href="">2020.2.2 当webサービスの利用方法に関するお知らせ</a><br>
                <br>
            </div>
            <div class="col-lg-4">
                <div class="contact">
                    <a class="btn btn-info" style="width: 300px;" href="">各種お問い合わせはこちらから</a>
                </div>
            </div>
         <!-- row -->
        </div>
    </div>
    <!-- container -->
</div>
<!-- dg -->

@endsection
