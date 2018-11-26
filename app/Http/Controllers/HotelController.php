<?php

namespace App\Http\Controllers;

use App\room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{

    public function hotel(){

        $dir = dir(public_path()."/hotel_details");
//        dd($dir->path);
        return view('hotel.index' , compact("dir"));

    }

    public function room(Request $request){
        $room = $request->get("room");

        $dir = dir(public_path()."/hotel_details/" . $room);


        $rooms = room::find($room);

        if($rooms == null)
            $rooms = array();
        else
            $rooms = $rooms->all();
        return view('hotel.room',compact('rooms' , "room" , "dir"));

    }
    public function admin(Request $request){
        $name = Auth::user()->name;
        $room = $request->get("room");
        if($name !== 'admin'){
            if($room == null || $room == 00){
                $rooms = room::all()->where('first_name',$name);
            }elseif($room !== null){
                $rooms = room::all()->where('first_name',$name,'id',$room);
            };
        }elseif($name == 'admin'){
            if($room == null || $room == 00){
                $rooms = room::all();
            }elseif($room !== null && $room !== 00){
                $rooms = room::all()->where('id',$room);
            };
        }

        return view('hotel.admin',compact('rooms'));

    }

    public function book(){

        return view('hotel.book');

    }

    public function bookvalidate(){

        return view('hotel.bookvalidate');

    }

    public function cancel(){

        $ids = request('ids');
        room::where('ids', $ids)->update(['reserve' => '0']);
        return redirect('/admin');

    }

    public function mydata(Request $request){
        $room = $request->get("room");
        $date = $request->get("date");
        $get  = room::where("date" , "=" , $date)->where("id" , "=" , $room)->first();
        if($get){
            echo "no";
        }else{
            echo "yes";
        }
    }
    public function permition(){

        return view('sessions.permition');

    }

    public function getcsv(){
        $name = Auth::user()->name;
        if($name !== 'admin'){
            $datas = room::all()->where('first_name',$name);
        }elseif($name == 'admin'){
            $datas = room::all();
        };

        $string = "Date,Room,First Name,Last Name,Id Address,Phonenumber,Email\n";
        foreach ($datas as $room)
        {
            $string .= $room->date . ",".$room->id.",".$room->first_name.",".$room->last_name.",".$room->id_address .",".$room->phonenumber.",".$room->email."\n";

        }
       Storage::disk("uploads")->put("CSVExport.csv" , $string);
        return $this->download();

    }

    public function download(){
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/upload/CSVExport.csv";

        $headers = array(
            'Content-Type: text/csv',
        );

        return Response::download($file, 'CSVExport.csv', $headers);
    }

}
