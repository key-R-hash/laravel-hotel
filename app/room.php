<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model

{
    protected $fillable = ['first_name','last_name','id_number','address','id_address','email','phonenumber','date','reserve','id','ids'];
}
