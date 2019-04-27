<?php

namespace App\Http\Controllers;

use App\Http\Requests\salesInvStore;
use App\sales_invoices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SalesInvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

    }


    public function create()
    {
        $customerList = DB::table('customers')->pluck('name','id');
        return view('sales_invoices.create')
            ->with('customerlist',$customerList);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(salesInvStore $request)
    {
        // Will return only validated data
        $request->validated();

        $data = request()->except(['_token', '_method']);
        $data['user_id'] = Auth::user()->id;
        $data['status'] = 'pending';
        $id = DB::table('sales_invoices')->insertGetId($data);

        return redirect('/sales_invoices/' . $id . '/edit');
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
        $result = sales_invoices::find($id);
        $products = DB::table('products')->pluck('product_name', 'id');

        return view('sales_invoices.edit')
           ->with('products', $products)
            ->with('result', $result);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
