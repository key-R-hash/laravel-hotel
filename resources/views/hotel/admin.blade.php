@extends('layouts.layoutadmin')

@section('content')

    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default" style="margin-top: 15px;">
                <div class="panel-heading">
                    اطلاعات رزرواسیون
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="/admin" class="form-inline" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="label-control">فیلتر بر اساس اتاق: </label>
                                    <select name="room" id="room" class="form-control">
                                        <option value="00">همه</option>
                                        <option value="101">101</option>
                                        <option value="102">102</option>
                                        <option value="103">103</option>
                                        <option value="104">104</option>
                                        <option value="105">105</option>
                                        <option value="201">201</option>
                                        <option value="202">202</option>
                                        <option value="203">203</option>
                                        <option value="204">204</option>
                                        <option value="205">205</option>
                                    </select>
                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 text-left">
                            <a id="form" class="btn btn-success" href="/getcsv"><i class="fa fa-file-excel-o"></i> دریافت گزارش اکسل</a>
                        </div>
                    </div>
                </div>
                <table  class="table table-striped panel-body">
                    <thead>
                    <tr>
                        <th>تاریخ</th>
                        <th>شماره اتاق</th>
                        <th>نام</th>
                        <th>نام خانوادگی</th>
                        <th>کد ملی</th>
                        <th>شماره تماس</th>
                        <th>ایمیل</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($rooms as $room){if($room->reserve == '1'){?>
                    <tr>
                        <td>{{$room->date}}</td>
                        <td>{{$room->id}}</td>
                        <td>{{$room->first_name}}</td>
                        <td>{{$room->last_name}}</td>
                        <td>{{$room->id_address}}</td>
                        <td>{{$room->phonenumber}}</td>
                        <td>{{$room->email}}</td>
                        <td><a href="/cancel?ids={{$room->ids}}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> لغو</a></td>
                    </tr>
                    <?php }} ?>
                    <?php  foreach ($rooms as $room){if($room->reserve == '0'){?>
                    <tr class="text-danger">
                        <td>{{$room->date}}</td>
                        <td>{{$room->id}}</td>
                        <td>{{$room->first_name}}</td>
                        <td>{{$room->last_name}}</td>
                        <td>{{$room->id_address}}</td>
                        <td>{{$room->phonenumber}}</td>
                        <td>{{$room->email}}</td>
                        <td><strong>لغو شده</strong></td>
                    </tr>
                    <?php }} ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
    @endsection