@extends('layouts.layout')

@section('content')


    <?php
            $room = $_GET['room'];


    ?>


    <div class="jumbotron">
        <div class="container">
            <p>هتل مهارت کیش یک هتل بسیار زیبا در قلب جزیره زیبای کیش است. کیش یک جزیره است در شرق آفریقا.</p>

            <p><a class="btn btn-primary pull-left" href="#" role="button">بیش‌تر بخوانید &raquo;</a></p>
        </div>
    </div>
    <div id="myModalk" class="modalk">

        <!-- Modal content -->
        <div class="modal-contentk">
            <span class="closek">&times;</span>
            <ul>
                <h4>خطا!</h4>
                <li class="first_child">لطفا فیلد های لازم را با دقت پر نمایید!:</li>
            </ul>
            <ul id="li">
            </ul>
            <div>
                <button id="OK">
                    OK
                </button>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">رزرو آنلاین اتاق {{$room}}</div>
                    <div class="panel-body">
                        <form id="form" method="post" action="book?room={{$room}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="first-name" class="label-control">نام</label>
                                <input name="first-name" type="text" class="form-control" id="first-name">
                            </div>
                            <div class="form-group">
                                <label for="last-name" class="label-control">نام خانوادگی</label>
                                <input name="last-name" type="text" class="form-control" id="last-name">
                            </div>
                            <div class="form-group">
                                <label for="id-number" class="label-control">کد ملی</label>
                                <input name="id-number" type="text" maxlength="10" minlength="10" class="form-control" id="id-number">

                            </div>
                            <div class="form-group">
                                <label for="address" class="label-control">آدرس محل سکونت</label>
                                <input name="address" type="text" class="form-control" id="address">
                            </div>
                            <div class="form-group">
                                <label for="id-address" class="label-control">کد پستی</label>
                                <input name="id-address" type="text" maxlength="10" minlength="10" class="form-control"
                                       id="id-address">
                            </div>
                            <div class="form-group">
                                <label for="email" class="label-control">ادرس ایمیل</label>
                                <input name="email" type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="id-phonenumber" class="label-control">شماره مبایل</label>
                                <input name="phonenumber" type="text" maxlength="11" minlength="11" class="form-control"
                                       id="phonenumber">
                            </div>
                            <div class="form-group">
                                <label for="date" class="label-control">تاریخ رزرو راوارد نمایید</label>
                                <input name="date" type="date" class="form-control" id="date" min="<?php echo Date("Y-m-d", time()) ?>" max="<?php echo Date("Y-m-d", strtotime("next month")) ?>">
                            </div>
                            <div class="button-wrapper text-left">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> رزرو</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
            integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>
    <script>


        $(document).ready(function () {

            var date_error;

            $("#date").on("change" , function(){
                var room = "{{$room}}";
                var datatime = $("#date").val();
                $.post("mydata", {date: datatime ,room: room}, function (mydata) {
                    date_error = mydata;
                })
            })
            $('#OK,.closek').click(function () {
                var modalk = $('#myModalk');
                modalk.css({'width': "0%", 'height': "0%", 'opacity': "0"});

            });
            $('#form').submit(function () {
                var Errors = [];
                var modalk = $('#myModalk');
                var firstname = $('#first-name').val();
                var lastname = $('#last-name').val();
                var idnumber = $('#id-number').val();
                var address = $('#address').val();
                var idaddress = $('#id-address').val();
                var email = $('#email').val();
                var phonenumber = $('#phonenumber').val();
                var phonenumber_one = phonenumber.substr(0, 3);
                var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
                var datatime = $("#date").val();
                if(datatime != "")
                {

                    if(date_error == "no")
                        Errors.push("تاریخ مورد نظر رزرو شده است!");
                }else{Errors.push("تاریخ پر نشده است!")}

                if (firstname == '') {

                    Errors.push("لطفا نام خود را وارد نمایید!");

                }
                if (lastname == '') {

                    Errors.push("لطفا نام خانوادگی خود را وارد کنید!");

                }
                if (idnumber == '' || isNaN(idnumber) || 10 !== idnumber.length) {

                    Errors.push("لطفا کد ملی خود را درست وارد کنید!");

                }
                if (address == '') {

                    Errors.push("لطفا آدرس محل سکونت خود را وارد کنید!");

                }
                if (idaddress == '' || isNaN(idaddress) || 10 !== idnumber.length) {

                    Errors.push("لطفا کد پستی خود را درست وارد کنید!");

                }
                if (email == '' || !filter.test(email)) {

                    Errors.push("لطفا آدرس ایمیل خود را وارد کنید!");

                }
                if (phonenumber == '' || isNaN(phonenumber) || 11 !== phonenumber.length || phonenumber_one !== '090' && phonenumber_one !== '091' && phonenumber_one !== '092' && phonenumber_one !== '093' && phonenumber_one !== '094') {

                    Errors.push("لطفا شماره مبایل خود را درست وارد کنید!");

                }
                $("#li").html('');

                $.each(Errors, function (index, Error) {
                    $('#li').append("<li>" + Error + "</li>")
                });
                if (Errors.length > 0) {
                    modalk.css({'width': "100%", 'height': "100%", 'opacity': "1"});
                    console.log(Errors);
                    return false;
                }
            })
        })
    </script>
@endsection