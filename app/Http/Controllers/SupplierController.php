<?php

namespace App\Http\Controllers;

use App\suppliers;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    public function index()
    {
        $results = suppliers::all();
        return view('suppliers.index')->with('results', $results);
    }



    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'supplier_name' => 'required|unique:suppliers|max:35',
            'mobile' => 'required',
            'address' => 'required',
            'payment' => 'required',
            'status' => 'required',
            'contact_person' => 'required',
        ]);

        $supplier = new suppliers();

        $supplier->supplier_name = $request->supplier_name;
        $supplier->mobile = $request->mobile;
        $supplier->address = $request->address;
        $supplier->payment = $request->payment;
        $supplier->status = $request->status;
        $supplier->user_id = 1;
        $supplier->contact_person = $request->contact_person;


        $supplier->save();

        return redirect('/suppliers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = suppliers::find($id);
        return view('suppliers.edit')->with('result', $result);

    }


    public function update(Request $request, $id)
    {
        $supplier = suppliers::find($id);

        $supplier->supplier_name = $request->supplier_name;
        $supplier->mobile = $request->mobile;
        $supplier->address = $request->address;
        $supplier->payment = $request->payment;
        $supplier->status = $request->status;
        $supplier->user_id = 1;
        $supplier->contact_person = $request->contact_person;


        $supplier->save();

        return redirect('/suppliers');
    }


    public function destroy($id)
    {
        //
    }
}
