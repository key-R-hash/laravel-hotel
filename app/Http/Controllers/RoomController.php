<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\room;
use App\User;
class RoomController extends Controller
{
    public function create(Request $request){

        room::create([
            'first_name' => request('first-name'),
            'id' => request('room'),
            'last_name' => request('last-name'),
            'id_number' => request('id-number'),
            'address' => request('address'),
            'id_address' => request('id-address'),
            'email' => request('email'),
            'phonenumber' => request('phonenumber'),
            'date' => request('date'),
            'room' => request('room'),
            'reserve' => '1'

        ]);
        $name = $request->get("first-name");
        $email = $request->get("email");
        $phonenumber =bcrypt($request->get("phonenumber"));
        User::create([

            'name' => $name,
            'email' => $email,
            'password' => $phonenumber,
        ]);
        return redirect('/');
    }
}
