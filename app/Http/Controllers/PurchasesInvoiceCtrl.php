<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchaseInvStore;
use App\purches_invoices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PurchasesInvoiceCtrl extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }


    public function store(PurchaseInvStore $request)
    {
        // Will return only validated data
        $request->validated();

        $data = request()->except(['_token', '_method']);
        $data['user_id'] = Auth::user()->id;
        $data['status'] = 'pending';
        $id = DB::table('purches_invoices')->insertGetId($data);

        return redirect('/purchases_invoice/' . $id . '/edit');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $result = purches_invoices::find($id);
        $products = DB::table('products')->where('supplier_id', $result->supplier_id)->pluck('product_name', 'id');

        return view('purches_invoices.edit')
            ->with('products', $products)
            ->with('result', $result);

    }

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
