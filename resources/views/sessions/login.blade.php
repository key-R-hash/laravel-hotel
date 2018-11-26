@extends('layouts.layout')
@section('content')

<div class="jumbotron">
    <div class="container">
        <p>هتل مهارت کیش یک هتل بسیار زیبا در قلب جزیره زیبای کیش است. کیش یک جزیره است در شرق آفریقا.</p>

        <p><a class="btn btn-primary pull-left" href="#" role="button">بیش‌تر بخوانید &raquo;</a></p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">ورود به پنل کاربری</div>
                <div class="panel-body">
                    <form action="/login" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="username" class="label-control">ایمیل خود را وارد کنید</label>
                            <input name="email" type="text" class="form-control" id="username">
                        </div>
                        <div class="form-group">
                            <label for="password" class="label-control">رمز عبور</label>
                            <input name="password" type="text" class="form-control" id="password">
                        </div>
                        <div class="button-wrapper text-left">
                            <button class="btn btn-success"><i class="fa fa-key"></i> ورود</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection