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

<div id="contactform">
    <div class="container">
        <div class="row centerd">
            <div class="col-lg-12">
                <h4><span> お問い合わせフォーム </span></h4>
                <p>Make Rulesをご利用頂き、誠にありがとうございます。<br>皆様より頂戴した貴重なご意見は今後の運営に活かして参ります。</p>
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>カテゴリ</label><br>
                        <select name="category" style="width: 400px;">
                            <option value="country">Make Rules に関するお問い合わせ</option>
                            <option value="company">不具合報告</option>
                            <option value="school">広告に関するお問い合わせ</option>
                            <option value="family">ビジネスに関するお問い合わせ</option>
                            <option value="love">その他のお問い合わせ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>氏名<span>(*必須）</span></label>
                        <input type="text" name="name" stile="width: 300px" placeholder="氏名">
                    </div>
                    <div class="form-group">
                        <label>Email<span>(*必須）</span></label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>お問い合わせ内容（●文字以内）</label>
                        <textarea name="content" id="" cols="30" rows="10" class="form-control" placeholder="内容を入力下さい"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger" style="width: 300px;">送信する</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
