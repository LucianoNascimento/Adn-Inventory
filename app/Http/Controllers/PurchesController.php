<?php

namespace App\Http\Controllers;

use App\purches;
use App\suppliers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $results = Purches::all();
        return view('purches.index')->with('results', $results);
    }


    public function create()
    {
        $suppliers = DB::table('suppliers')->pluck('supplier_name', 'id');
        return view('purches.create')->with('suppliers', $suppliers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\purches  $purches
     * @return \Illuminate\Http\Response
     */
    public function show(purches $purches)
    {
        //
    }

    public function addPurchase(){

        $purches = new Purches();

        //todo: Add some column  total, Purchase_invoice

        $purches->product_id =  $_REQUEST['product_id'];
        $purches->sales_invoice = $_REQUEST['inv_id'];
        $purches->quantity =$_REQUEST['qty'];
        $purches->price = $_REQUEST['price'];
        $purches->total = $_REQUEST['total'];
        $purches->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\purches  $purches
     * @return \Illuminate\Http\Response
     */
    public function edit(purches $purches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\purches  $purches
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, purches $purches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\purches  $purches
     * @return \Illuminate\Http\Response
     */
    public function destroy(purches $purches)
    {
        //
    }
}
