<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\CustomerType;
use Exception;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class CustomerController extends Controller
{
    public function index(){

        $data['customers'] = Customer::all();
        return view('Compenens.Customers.index',$data);
    }
    public function create(){
        $data['customer_types'] = CustomerType::all();
        return view('Compenens.Customers.create',$data);
    }
    public function edit($id){
        $data['customer_types'] = CustomerType::all();
        $data['customers'] = Customer::findOrFail($id);
        return view('Compenens.Customers.edit',$data);
    }
    public function store(Request $request)
    {
        try {
          $request->validate([
                'customercode' => 'required|string|max:50',
                'customertypeid' => 'required|exists:customer_types,customertypeid',
                'customername' => 'required|string|max:50',
                'sex' => 'required',
                'dob' => 'required|date',
                'phone' => 'required|string|max:200',
                'passportnumber' => 'required|string|max:200',
                'country' => 'required|string|max:50',
                // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $customer = new Customer();
            $customer->customercode = $request->input('customercode');
            $customer->customertypeid = $request->input('customertypeid');
            $customer->customername = $request->input('customername');
            $customer->sex = $request->input('sex');
            $customer->dob = $request->input('dob');
            $customer->phone = $request->input('phone');
            $customer->passportnumber = $request->input('passportnumber');
            $customer->country = $request->input('country');
            $customer->save();
            return redirect()->route('customer.index')->with('success', 'Customer created successfully.');

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request,$id){
        try{

            $customer = Customer::findOrFail($id);
            $customer->update($request->all());
            return redirect()->route('customer.index')->with('success', 'Customer updated successfully.');
        } catch(Exception $ex){
            Log::error($ex->getMessage());
            return response()->json(['message' => $ex->getMessage()], 500);
        }

    }
    public function destroy(Request $request,$id){
        $customer = Customer::findOrFail($id);
        $customer->delete($request->all());
        return redirect()->route('customer.index')->with('success', 'Customer deleted successfully');
    }




}
