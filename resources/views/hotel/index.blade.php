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
        <?php
            while (($file = $dir->read()) !== false){
            if($file !== '.' && $file !== '..'){?>
            <div class="col-lg-4">
                <div class="panel panel-default room-image">
                    <div class="panel-heading">{{$file}}</div>
                    <div class="panel-body">
                        <img src="/hotel_details/<?=  $file ?>/room.jpg" alt="Room image">
                    </div>
                    <div class="panel-footer text-left">
                        <a href="index.php/room?room={{$file}}" class="btn btn-info">
                            <i class="fa fa-search"></i>
                            مشاهده
                        </a>
                    </div>
                </div>
            </div>
       <?php }   }    ?>

    </div>
</div>

@endsection