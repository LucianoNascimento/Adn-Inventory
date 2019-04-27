<?php

namespace App\Http\Controllers;

use App\purches;
use App\suppliers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\purches $purches
     * @return \Illuminate\Http\Response
     */
    public function show(purches $purches)
    {
        //
    }

    public function getTotal()
    {
        $inv =  $_REQUEST['invNumber'];
       return $data = DB::table("purches")->where('purches_invoice',$inv)->sum('total');
    }

    public function addPurchase()
    {

        $purches = new Purches();
//        //todo: Add some column  total, Purchase_invoice
        $purches->user_id = Auth::user()->id;
        $purches->product_id = $_REQUEST['product_id'];
        $purches->quantity = $_REQUEST['qty'];
        $purches->purches_price = $_REQUEST['price'];
        $purches->total = $_REQUEST['total'];
        $purches->status = 'active';
        $purches->sales_price = $_REQUEST['s_price'];
        $purches->profit = $_REQUEST['s_price'] - $_REQUEST['price'];
        $purches->purches_invoice = $_REQUEST['invNumber'];


        if ($purches->save()) {
            $results = DB::table('purches')->where('purches_invoice', $purches->purches_invoice)->get();
            ?>
            <table>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Purchases Price</th>
                    <th>Total</th>
                </tr>

                <?php foreach ($results as $result) { ?>

                    <tr>
                        <td><?php echo $result->product_id; ?></td>
                        <td><?php echo $result->quantity; ?></td>
                        <td><?php echo $result->purches_price; ?></td>
                        <td><?php echo $result->total; ?></td>
                    </tr>
                <?php } ?>
            </table>

        <?php } else {
            echo 'fail';
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\purches $purches
     * @return \Illuminate\Http\Response
     */
    public function edit(purches $purches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\purches $purches
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, purches $purches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\purches $purches
     * @return \Illuminate\Http\Response
     */
    public function destroy(purches $purches)
    {
        //
    }
}
