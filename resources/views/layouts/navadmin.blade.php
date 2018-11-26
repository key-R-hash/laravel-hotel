<div class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">هتل مهارت کیش</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">صفحه اصلی</a></li>
                @if(Auth::check())
                    <li class="active"><a href="/admin">رزوی ها</a></li>
                @endif
            </ul>
            <div class="navbar-left">
                <ul class="nav navbar-nav">
                    @if(Auth::check())
                        <li><a><i class="fa fa-user"></i> خوش امدید</a></li>
                        <li><a href="/logout"> خروج</a></li>
                    @endif
                </ul>
            </div>
        </div><!--/.nav-collapse -->
    </div>
</div>