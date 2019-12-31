@extends('layouts/front')
@section('page')

<div class="container w">
    <div class="row centered">
        <br><br>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><h4>ベーシックインカム。全国民に毎月５万円を支給</h4></div>
                <div class="card-body">
                    <ul>
                        <div class="row">
                        <div class="col-lg-2">
                        <li><img src="{{ asset('app/img/pic3.jpg') }}" class="img-responsive img-circle" style="width:75px; height:75px;" alt="avator"></li>
                        </div>
                        <div class="col-lg-1">
                        <h5>首藤英人</h5>
                        </div>
                        <br>
                        <div class="col-lg-10"></div>
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
    </div>
    <!-- row -->
    <br>
    <!-- row -->
</div>
  <!-- container -->

  <!-- PRICING SECTION -->
<div id="dg">
<div class="container">
    <div class="row centered">
    <h4>PRICING PLANS</h4>
    <br>
    <div class="col-lg-4">
          <!-- START PRICING TABLE -->
          <div class="pricing-option">
            <div class="pricing-top">
              <span class="pricing-edition">Starter</span>
              <span class="price">
                                <sup>$</sup>
                                <span class="price-amount">19</span>
              <small>/mo</small>
              </span>
            </div>
            <ul>
              <li><strong>10GB</strong> Storage</li>
              <li>Up to <strong>10</strong> Users</li>
              <li><strong>5</strong> Domains</li>
              <li><strong>Free</strong> Setup</li>
              <li><strong>1-year</strong> Free support *</li>
            </ul>
            <a href="index.html#" class="pricing-signup">Sign up</a>
          </div>
          <!-- /pricing-option -->
          <!-- END PRICING TABLE -->
        </div>
        <!-- /col -->

        <div class="col-lg-4">
          <!-- START PRICING TABLE -->
          <div class="pricing-option">
            <div class="pricing-top">
              <span class="pricing-edition">Standard</span>
              <span class="price">
                                <sup>$</sup>
                                <span class="price-amount">29</span>
              <small>/mo</small>
              </span>
            </div>
            <ul>
              <li><strong>20GB</strong> Storage</li>
              <li>Up to <strong>20</strong> Users</li>
              <li><strong>10</strong> Domains</li>
              <li><strong>Free</strong> Setup</li>
              <li><strong>2-year</strong> Free support *</li>
            </ul>
            <a href="index.html#" class="pricing-signup">Sign up</a>
          </div>
          <!-- /pricing-option -->
          <!-- END PRICING TABLE -->
        </div>
        <!-- /col -->

        <div class="col-lg-4">
          <!-- START PRICING TABLE -->
          <div class="pricing-option">
            <div class="pricing-top">
              <span class="special-label">OFFER!</span>
              <span class="pricing-edition">Ultimate</span>
              <span class="price">
                                <sup>$</sup>
                                <span class="price-amount">69</span>
              <small>/mo</small>
              </span>
            </div>
            <ul>
              <li><strong>150GB</strong> Storage</li>
              <li><strong>Unlimited</strong> Users</li>
              <li><strong>50</strong> Domains</li>
              <li><strong>Free</strong> Setup</li>
              <li><strong>5-year</strong> Free support *</li>
            </ul>
            <a href="index.html#" class="pricing-signup">Sign up</a>
          </div>
          <!-- /pricing-option -->
          <!-- END PRICING TABLE -->
        </div>
        <!-- /col -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- DG -->

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
