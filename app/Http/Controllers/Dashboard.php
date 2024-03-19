<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Customer;
use App\Models\RoomType;
use App\Models\Reservation;
use App\Models\CustomerType;
use Illuminate\Http\Request;
use App\Models\ReservationDetail;

class Dashboard extends Controller
{
    public function index(){
        $data['customers']=Customer::get();
        $data['customer_types']=CustomerType::get();
        $data['rooms']=Room::get();
        $data['room_types']=RoomType::get();
        $data['reservations']=Reservation::get();
        $data['reservation_details']=ReservationDetail::get();
        return view('index',$data);
    }
    public function customer(){
        $data['customers'] = Customer::all();
        return view('Compenens.Customers.index',$data);
    }
    public function customerType(){
        $data['customer_types'] = CustomerType::all();
        return view('Compenens.CustomerTypes.index',$data);
    }
    public function Room(){
       $data['rooms'] = Room::all();
        return view('Compenens.Rooms.index',$data);
    }
    public function RoomType(){
      //  $data['customerType'] = CustomerType::all();
        return view('Compenens.RoomTypes.index');
    }
    public function Reservation(){
       // $data['customerType'] = CustomerType::all();
        return view('Compenens.Reservations.index');
    }
    public function ReservationDetail(){
       // $data['customerType'] = CustomerType::all();
        return view('Compenens.ReservationDetails.index');
    }
}
