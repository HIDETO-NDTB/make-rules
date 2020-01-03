<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="title" href="{{ route('index') }}">Make Rules</a>
            </div>
        </div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-6">
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a class="btn btn-default" style="width:120px; margin: 10px 2px;" href="{{ route('category') }}">国　自治体</a></li>
                    <li><a class="btn btn-default" style="width:120px; margin: 10px 2px;" href="#">会社</a></li>
                    <li><a class="btn btn-default" style="width:120px; margin: 10px 2px;" href="#">学校</a></li>
                    <li><a class="btn btn-default" style="width:120px; margin: 10px 2px;" href="#">家族　親戚</a></li>
                    <li><a class="btn btn-default" style="width:120px; margin: 10px 2px;" href="#">男女　恋愛</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <li class="nav-item navbar-right">
                <a class="btn btn-primary" style="width:100px; height:50px; margin: 10px 30px;" href="">Login</a>
            </li>
        </div>
    </div>
        <!--/.nav-collapse -->
</div>
