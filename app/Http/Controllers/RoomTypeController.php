<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class RoomTypeController extends Controller
{
    //
    public function index(){
        $data['room_types'] = RoomType::all();
        return view('Compenens.Roomtypes.index',$data);
    }
    public function create(){
        $data['room_types'] = RoomType::all();
        return view('Compenens.Roomtypes.create',$data);
    }
    public function store(Request $request){
        try{
            $request->validate([
                'roomtypename' => 'required|string|max:50',
            ]);
            $roomtype = new RoomType();
            $roomtype->roomtypename = $request->input('roomtypename');
            $roomtype->save();
            return Redirect::route('roomtype.index')->with('success','Roomtype created successfully');
        }catch(Exception $ex){
            Log::error($ex->getMessage());
            return response()->json(['message' => $ex->getMessage()], 500);
        }
    }
    public function edit($id){
       // $data['room_types'] = RoomType::all();
        $data['room_types'] = RoomType::findOrFail($id);
        return view('Compenens.Roomtypes.edit',$data);
    }
    public function update(Request $request,$id){
        try{
            $roomtypes = RoomType::findOrFail($id);
            $roomtypes->update($request->all());
            return Redirect::route('roomtype.index')->with('success','Roomtype created successfully');
        }catch(Exception $ex){
            Log::error($ex->getMessage());
            return response()->json(['message' => $ex->getMessage()], 500);
        }

    }
    public function destroy(Request $request,$id){
        $roomtypes = RoomType::findOrFail($id);
        $roomtypes->delete($request->all());
        return Redirect::route('roomtype.index')->with('success','Roomtype created successfully');
    }
}
