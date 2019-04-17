<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $results = Customer::all();
        return view('customers.index')->with('results',$results);
    }


    public function create()
    {
        return view('customers.create');

    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:35',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'status' => 'required',
            'amount' => 'required',

        ]);

        $customer= new Customer();

        $customer->user_id = 1;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->status = $request->status;
        $customer->amount = $request->amount;


        $customer->save();

        return redirect('/customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Customer::find($id);
        return view('customers.details')->with('result', $result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Customer::find($id);
        return view('customers.edit')->with('result', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $customer= Customer::find($id);

        $customer->user_id = 1;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->status = $request->status;
        $customer->amount = $request->amount;


        $customer->save();

        return redirect('/customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customerdelete = Customer::find($id);
        $customerdelete->delete();
        return redirect('/customer')->with('Success!!','Customer Deleted');
    }
   /* public function destroy($id)
    {
        Customer::where('id', $id)->delete();
        return redirect('/customers');
    }*/
}
