@extends('layouts/front')
@section('page')

<div id="commentwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-6">
                <div class="card2">
                    <div class="card-header"><h4><b>エアコンの設定温度は女性が決める</b></h4></div>
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
                                <li><p>長く議論されてきた男女の温度差に決着をつけませんか？ 私は男ですが、やはり温度管理は女性に任せた方が世の中うまくいくと思います。</p></li>
                            </div>
                            <div class="row">
                                <li>発議日: 2020年1月25日</li>
                                <li>投票日: 2020年2月1日</li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('app/img/image01.jpeg') }}"  style="width:100%; height:100%;">
            </div>
        </div>
      <!-- row -->
    </div>
    <!-- container -->
</div>

<div id="resultform">
    <div class="container">
        <div class="label-vertical">
            <div class="label">（得票率）</div>
            <div class="label">100</div>
            <div class="label">90</div>
            <div class="label">80</div>
            <div class="label">70</div>
            <div class="label">60</div>
            <div class="label">50</div>
            <div class="label">40</div>
            <div class="label">30</div>
            <div class="label">20</div>
            <div class="label">10</div>
            <div class="label">0</div>
        </div>
        <div class="inner">
            <div class="graph">
                <hr style="top: 26px;">
                <hr style="top: 52px;">
                <hr style="top: 78px;">
                <hr style="top: 104px;">
                <hr style="top: 130px;">
                <hr style="top: 156px;">
                <hr style="top: 182px;">
                <hr style="top: 208px;">
                <hr style="top: 234px;">
                <hr style="top: 260px;">
                <hr style="top: 286px;">
                <div class="bar" style="height: 165px; margin-top: 122px;"></div>
                <div class="bar" style="height: 82px; margin-top: 203px;"></div>
            </div>
        <div class="label-horizontal">
            <div class="label">賛成</div>
            <div class="label">反対</div>
          </div>
        </div>
    </div>
</div>

<div class="container w">
    <div class="row centered">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><h4>賛成派意見</h4></div>
                <div class="card-body">
                    <ul>
                        <div class="row">
                            <div class="col-lg-1">
                                <li><img src="{{ asset('app/img/pic3.jpg') }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avator"></li>
                            </div>
                            <div class="col-lg-1">
                                <h5>首藤英人</h5>
                            </div>
                            <div class="col-lg-10"></div>
                        </div>
                        <div class="row">
                            <li><p>賛成です。男性は暑ければ上着を脱ぐなりできますが、女性は着る服によってはそれができないこともありますし・・・。レディファストの精神ですね。</p></li>
                        </div>
                        <div class="row">
                            <li>発言日: 2020年1月31日</li>
                        </div>
                    </ul>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header"><h4>反対派意見</h4></div>
                <div class="card-body">
                    <ul>
                        <div class="row">
                            <div class="col-lg-1">
                                <li><img src="{{ asset('app/img/pic3.jpg') }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avator"></li>
                            </div>
                            <div class="col-lg-1">
                                <h5>首藤英人</h5>
                            </div>
                            <div class="col-lg-10"></div>
                        </div>
                        <div class="row">
                            <li><p>どっちでも良いとの立場ですが、強いて言えば反対。そもそもそこを規則化する必要ありますか？</p></li>
                        </div>
                        <div class="row">
                            <li>発言日: 2020年1月31日</li>
                        </div>
                    </ul>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header"><h4>反対派意見</h4></div>
                <div class="card-body">
                    <ul>
                        <div class="row">
                            <div class="col-lg-1">
                                <li><img src="{{ asset('app/img/pic3.jpg') }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avator"></li>
                            </div>
                            <div class="col-lg-1">
                                <h5>首藤英人</h5>
                            </div>
                            <div class="col-lg-10"></div>
                        </div>
                        <div class="row">
                            <li><p>どっちでも良いとの立場ですが、強いて言えば反対。そもそもそこを規則化する必要ありますか？</p></li>
                        </div>
                        <div class="row">
                            <li>発言日: 2020年2月1日</li>
                        </div>
                    </ul>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header"><h4>反対派意見</h4></div>
                <div class="card-body">
                    <ul>
                        <div class="row">
                            <div class="col-lg-1">
                                <li><img src="{{ asset('app/img/pic3.jpg') }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avator"></li>
                            </div>
                            <div class="col-lg-1">
                                <h5>首藤英人</h5>
                            </div>
                            <div class="col-lg-10"></div>
                        </div>
                        <div class="row">
                            <li><p>どっちでも良いとの立場ですが、強いて言えば反対。そもそもそこを規則化する必要ありますか？</p></li>
                        </div>
                        <div class="row">
                            <li>発言日: 2020年2月1日</li>
                        </div>
                    </ul>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header"><h4>賛成派意見</h4></div>
                <div class="card-body">
                    <ul>
                        <div class="row">
                            <div class="col-lg-1">
                                <li><img src="{{ asset('app/img/pic3.jpg') }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avator"></li>
                            </div>
                            <div class="col-lg-1">
                                <h5>首藤英人</h5>
                            </div>
                            <div class="col-lg-10"></div>
                        </div>
                        <div class="row">
                            <li><p>賛成です。男性は暑ければ上着を脱ぐなりできますが、女性は着る服によってはそれができないこともありますし・・・。レディファストの精神ですね。</p></li>
                        </div>
                        <div class="row">
                            <li>発言日: 2020年2月1日</li>
                        </div>
                    </ul>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
<br>

@endsection
