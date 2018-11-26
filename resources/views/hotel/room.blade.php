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
        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="#" class="thumbnail">
                                <img src="../hotel_details/{!! $room !!}/room.jpg" alt="Main pic">
                            </a>
                        </div>

                        <?php

                        while (($file = $dir->read()) !== false){
                        if($file !== '.' && $file !== '..' && $file!= "room.jpg"){?>

                        <div class="col-lg-4">
                            <a href="#" class="thumbnail">
                                <img src="../hotel_details/{!! $room !!}/2.jpg" alt="Main pic">
                            </a>
                        </div>

                        <?php } } ?>

                        {{--<div class="col-lg-4">--}}
                            {{--<a href="#" class="thumbnail">--}}
                                {{--<img src="storage/app/public/image/{!! $room !!}/1.jpg" alt="Main pic">--}}
                            {{--</a>--}}
                        {{--</div>--}}

                        {{--<div class="col-lg-4">--}}
                            {{--<a href="#" class="thumbnail">--}}
                                {{--<img src="storage/app/public/image/{!! $room !!}/2.jpg" alt="Main pic">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2>{!! $room !!}</h2>
                    <hr>
                    <p>
                        توضیحات در مورد این هتل در این قسمت قرار می‌گیرد. این اتاق مجهز به یک دستگاه تلویزیون، شامپو،
                        حوله و تخت خواب است.
                        توضیحات در مورد این هتل در این قسمت قرار می‌گیرد. این اتاق مجهز به یک دستگاه تلویزیون، شامپو،
                        حوله و تخت خواب است.
                        توضیحات در مورد این هتل در این قسمت قرار می‌گیرد. این اتاق مجهز به یک دستگاه تلویزیون، شامپو،
                        حوله و تخت خواب است.
                        توضیحات در مورد این هتل در این قسمت قرار می‌گیرد. این اتاق مجهز به یک دستگاه تلویزیون، شامپو،
                        حوله و تخت خواب است.
                        توضیحات در مورد این هتل در این قسمت قرار می‌گیرد. این اتاق مجهز به یک دستگاه تلویزیون، شامپو،
                        حوله و تخت خواب است.
                        توضیحات در مورد این هتل در این قسمت قرار می‌گیرد. این اتاق مجهز به یک دستگاه تلویزیون، شامپو،
                        حوله و تخت خواب است.
                    </p>
                </div>
                <div class="panel-footer">
                    <div class="text-left">
                        <a href="book?room={!! $room !!}" class="btn btn-success">
                            <i class="fa fa-user-plus"></i>
                            رزرو
                        </a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">وضعیت رزرو</div>

                <table class="table table-bordered panel-default">
                    <thead>
                    <tr>
                        <th>تاریخ</th>
                        <th style="width: 100px;">وضعیت</th>
                    </tr>
                    </thead>
                    <tbody>


                   <?php foreach($rooms as $room){?>
                    <tr>
                        <td>
                            {{$room->date}}
                        </td>
                        <td>
                            <strong class="text-danger">رزرو شده</strong>
                        </td>
                    </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection