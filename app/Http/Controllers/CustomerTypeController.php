<?php

namespace App\Http\Controllers;
use Exception;
use App\Models\Customer;
use App\Models\CustomerType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class CustomerTypeController extends Controller
{
    public function index(){
        $data['customer_types'] = CustomerType::all();
        return view('Compenens.Customertypes.index', $data);
        // $customer_types = CustomerType::all();
        // return view('Compenens.Customertypes.index', compact('customer_types'));
    }

    public function create(){
        $data['customer_types'] = CustomerType::all();
        return view('Compenens.Customertypes.create',$data);
    }

    public function store(Request $request){
        $request->validate([
            'customertype_name' => 'required'
        ]);

        $customerType = new CustomerType();
        $customerType->customertypename = $request->input('customertype_name');
        $customerType->save();

        return Redirect::route('customertype.index')->with('success', 'Customer Type created successfully');
    }
    public function edit($id){
       // $data['customer_types'] = CustomerType::all();
        $data['customer_types'] = CustomerType::findOrFail($id);
        return view('Compenens.Customertypes.edit',$data);
    }
    public function update(Request $request,$id){
        try{
            $customer_types = CustomerType::findOrFail($id);
            $customer_types->update($request->all());
            return redirect()->route('customertype.index')->with('success','customertype updated successfully');
        }catch(Exception $ex){
            Log::error($ex->getMessage());
            return response()->json(['message' => $ex->getMessage()], 500);
        }
    }
    public function destroy(Request $request,$id){
        $customer_types = CustomerType::findOrFail($id);
        $customer_types->delete($request->all());
        return redirect()->route('customertype.index')->with('success','customertype deleted successfully');
    }
}

