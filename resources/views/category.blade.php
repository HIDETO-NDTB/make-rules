@extends('layouts/front')
@section('page')

<div id="headerwrap">
    <div class="container">
        <div class="row centered">
                <div class="col-lg-6">
                    <!-- START PRICING TABLE -->
                    <div class="pricing-option">
                        <div class="pricing-top">
                            <span class="pricing-edition">{{ $category->name }}<br>未投票案件数</span>
                            <span class="price">
                                <sup></sup>
                                <span class="price-amount">{{count($category->rules)}}</span>
                                <small>案件</small>
                            </span>
                        </div>
                        <ul>
                            <li>総発議数　<strong>９７案件</strong></li>
                            <li>投票済数　<strong>９３案件</strong></li>
                            <li>採用数　<strong>２０案件</strong></li>
                        </ul>
                    </div>
                    <!-- /pricing-option -->
                    <!-- END PRICING TABLE -->
                </div>

        </div>
      <!-- row -->
    </div>
    <!-- container -->
</div>

<div class="container w">
    <div class="row centered">
        <div class="col-lg-12">
            @if($category->rules->count() > 0)
            @foreach ($rules as $rule)
            <div class="card">
                <div class="card-header"><h4>{{ $rule->title }}</h4></div>
                <div class="card-body">
                    <ul>
                        <div class="row">
                            <div class="col-lg-1">
                                <li><img src="{{ asset('app/img/pic3.jpg') }}" class="img-responsive img-circle" style="width:60px; height:60px;" alt="avator"></li>
                            </div>
                            <div class="col-lg-2">
                                <h5>{{ $rule->user->name }}</h5>
                            </div>
                            <div class="col-lg-9"></div>
                        </div>
                        <div class="row">
                            <li><p>{{ $rule->content }}</p></li>
                        </div>
                        <div class="row">
                            <li>発議日: {{ $rule->initiative_date }}</li>
                            <li>投票日: {{ $rule->vote_date }}</li>
                        </div>
                        <div class="row">
                            <div class="col-lg-8"></div>
                            <div class="col-lg-4">
                                @if(var_dump(Carbon::today()->between(Carbon::parse($rule->initiative_date), Carbon::parse($rule->vote_date)));)
                                <a class="btn btn-primary" style="width: 300px;" href="{{ route('rule.single',['id' =>$rule->id]) }}">コメントする</a>
                                @elseif(var_dump(Carbon::today()->between(Carbon::parse($rule->vote_date), Carbon::parse($rule->vote_date(strtotime("+7 day"))));)
                                <a class="btn btn-danger" style="width: 300px;" href="{{ route('rule.single',['id' =>$rule->id]) }}">投票に行く</a>
                                @endif
                        </div>
                    </ul>
                </div>
            </div>
            @endforeach
            @else
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3>現在、当カテゴリの法案はありません</h3>
                </div>
            @endif
        </div>
    </div>
</div>
<br>


  <!-- container -->




  <!-- FOOTER -->

  <!-- Footer -->


  <!-- MODAL FOR CONTACT -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">contact us</h4>
        </div>
        <div class="modal-body">
          <div class="row centered">
            <p>We are available 24/7, so don't hesitate to contact us.</p>
            <p>
              Somestreet Ave, 987<br/> London, UK.<br/> +44 8948-4343<br/> contact@example.com
            </p>

            <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

              <div class="form-group">
                <label for="contact-name">Your Name</label>
                <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-email">Your Email</label>
                <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-subject">Subject</label>
                <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <label for="contact-message">Your Message</label>
                <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>

              <div class="loading"></div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <div class="form-send">
                <button type="submit" class="btn btn-large">Send Message</button>
              </div>

            </form>
          </div>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->



@endsection
