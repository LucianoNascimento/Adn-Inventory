<?php

namespace App\Http\Controllers;

use App\sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SalesController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $customer = DB::table('customers')->pluck('name', 'id');
        return view('sales.create')->with('customer', $customer);
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
     * @param  \App\sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function show(sales $sales)
    {
        //
    }
    public function addPurchase(){

        $purches = new sales();

        //todo: Add some column  total, Purchase_invoice

       $purches->product_id =  $_REQUEST['product_id'];
        $purches->sales_invoice = $_REQUEST['invoice_id'];
        $purches->quantity =$_REQUEST['quantity'];
        $purches->price = $_REQUEST['sales_price'];
        $purches->total = $_REQUEST['total'];
        $purches->purches_invoices = $_REQUEST['purches_invoices'];
        $purches->save();
    }



    public function edit(sales $sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sales $sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy(sales $sales)
    {
        //
    }
}
