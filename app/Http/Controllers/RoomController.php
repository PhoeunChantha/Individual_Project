<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RoomController extends Controller
{
    //
    public function index(){
        $data['rooms']= Room::all();
        return view('Compenens.Rooms.index',$data);
    }
    public function create(){
        $data['room_types']=RoomType::all();
        $data['rooms']= Room::all();
        return view('Compenens.Rooms.create',$data);
    }
    public function store(Request $request){
        $request->validate([
            'roomnumber' =>'required',
            'roomtypeid' =>'required|exists:room_types,roomtypeid',
            'roomname' =>'required|string|max:50',
        ]);
        $room = new Room();
        $room->roomnumber = $request->input('roomnumber');
        $room->roomtypeid = $request->input('roomtypeid');
        $room->roomname = $request->input('roomname');
        $room->save();
        return Redirect::route('room.index')->with('success','Room created successfully');
    }
    public function edit($id){
        $data['room_types']=RoomType::all();
        $data['rooms'] = Room::findOrFail($id);
        return view('Compenens.Rooms.edit',$data);
    }
    public function update(Request $request,$id){
        $rooms = Room::findOrFail($id);
        $rooms ->update($request->all());
        return redirect()->route('room.index')->with('success','Room updated successfully');
    }
    public function destroy(Request $request,$id){
        $rooms = Room::findOrFail($id);
        $rooms->delete($request->all());
        return redirect()->route('room.index')->with('success','Room deleted successfully');
    }
}
