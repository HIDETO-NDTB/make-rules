@extends('layouts/front')
@section('page')

<div id="initiativewrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <img src="{{ secure_asset('app/img/initiative-min.jpg') }}"  style="width:100%; height:100%;">
            </div>
        </div>
    </div>
    <!-- container -->
</div>

<div id="contactform">
    <div class="container">
        <div class="row centerd">
            <div class="col-lg-12">
                <h3><span> お問い合わせフォーム </span></h3>
                <p>Make Rulesをご利用頂き、誠にありがとうございます。<br>皆様より頂戴した貴重なご意見は今後の運営に活かして参ります。</p>
                <form action="{{ route('contacts.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>カテゴリ</label><br>
                        <select name="category" style="width: 400px;">
                            <option value="makerules">Make Rules に関するお問い合わせ</option>
                            <option value="problem">不具合報告</option>
                            <option value="add">広告に関するお問い合わせ</option>
                            <option value="business">ビジネスに関するお問い合わせ</option>
                            <option value="others">その他のお問い合わせ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>氏名</label><br>
                        <input type="text" name="name" stile="width: 400px">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>お問い合わせ内容（２００文字以内）</label>
                        <textarea name="content" cols="30" rows="10" class="form-control" placeholder="内容を入力下さい"></textarea>
                    </div>
                    <div class="form-group">
                        @if(Auth::check())
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                    </div>
                        @else
                        <input type="hidden" name="user_id" value="0">
                    </div>
                        @endif
                    <div class="form-group">
                        <button type="submit" class="btncmt">送信する</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
