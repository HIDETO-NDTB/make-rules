@extends('layouts.front')
@section('page')

<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-6">
                <div class="introduce-option">
                    <h5 class="introduce"><span>Make Rules</span>を学校や職場などで使いませんか？</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row centered">
        <div class="mobile-option2">
            <div class="mobile-top2">
                <h4>Make Rulesを学校や職場などで使いませんか？</h4>
            </div>
        </div>
    </div>
</div>

<div id="contentsintroduce">
    <div class="container">
        <div class="col-lg-6">
            <img class="school" src="{{ secure_asset('app/img/school-min.jpg') }}" style="width: 100%;">
            <img class="office" src="{{ secure_asset('app/img/office-min.jpg') }}" style="width: 100%;">
        </div>
        <div class="col-lg-6">
            <h3>単独利用契約のメリット</h3>
            <div class="contentdetale">
                <h4>1. 学校や職場の仲間だけで使える</h4>
            </div>
            <div class="contentdetale">
                <h4>2. 思考力、説得力、理解力の育成に繋がる</h4>
            </div>
            <div class="contentdetale">
                <h4>3. 実際のニュースに関心を持つようになる</h4>
            </div>
            <div class="contentdetale">
                <h4>4. 日々の生活に問題意識が芽生える</h4>
            </div>
            <div class="contentdetale2">
                <h4>5. 月29,700円〜。最短３ヶ月契約OK</h4>
                <p>※ プランによって異なります</p>
            </div>
            <div class="contentdetale2">
                <h4>6. カテゴリや投票期間などカスタマイズも相談可</h4>
                <p>※ 内容によっては別料金となります</p>
            </div>
            <div class="contentdetale">
                <h4>7. 仲間内での実際の規則運営にも利用できる</h4>
            </div>
        </div>
    </div>
</div>

<div id="priceintroduce">
    <div class="container">
        <h3>商品のご紹介</h3>
        <table class="contentsfee">
            <tr>
                <th>プラン名</th>
                <th>ご利用人数</th>
                <th>初回制作料</th>
                <th>月使用料</th>   
            </tr>
            <tr>
                <td>プランA</td>
                <td>〜50名</td>
                <td>52,800円</td>
                <td>29,700円</td>
            </tr>
            <tr>
                <td>プランB</td>
                <td>〜100名</td>
                <td>52,800円</td>
                <td>40,700円</td>
            </tr> 
            <tr>
                <td>プランC</td>
                <td>〜200名</td>
                <td>52,800円</td>
                <td>51,700円</td>
            </tr>  
        </table>
        <p>※ カテゴリや投票期間などをカスタマイズした場合は別途制作料がかかります</p>
        <p>※ サーバー使用料などは別途実費が必要となります</p>
        <p>※ 200名以上での利用をご希望の場合は別途お見積もりさせて頂きます。</p>
        <div class="contactintroduce">
            <a class="btnintroduce" href="{{ route ('contact') }}">お問い合わせはこちらから</a>
        </div>
    </div>
</div>



@endsection