<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
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
        $reuslts = Product::all();
        return view('product.index')->with('results',$reuslts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catList = DB::table('categories')->pluck('name','id');
        $supplierList = DB::table('suppliers')->pluck('supplier_name','id');

        return view('product.create')
            ->with('catlist',$catList)
            ->with('suppliers',$supplierList);

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
            'product_name' => 'required|unique:products|max:35',
            'supplier_id' => 'required',
           'cat_id' => 'required',
            'status' => 'required',
           // 'user_id' => 'required',
            'alert_quantity' => 'required',
            'sale_price' => 'required',
            'purches_price' => 'required',
            'profit' => 'required',
            'picture' => 'image|nullable|max:1999'

        ]);

        if($request->hasFile('picture')){
            // Get filename with the extension
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('picture')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('picture')->storeAs('public/picture', $fileNameToStore);


        } else {
            $fileNameToStore = 'noimage.jpg';
        }


        $product= new Product();

        $product->product_name = $request->product_name;
        $product->supplier_id = $request->supplier_id;
        $product->cat_id = $request->cat_id;
        $product->status = $request->status;
        $product->user_id = 1;
        $product->picture = $fileNameToStore;
        $product->alert_quantity = $request->alert_quantity;
        $product->sale_price = $request->sale_price;
        $product->purches_price = $request->purches_price;
        $product->profit = $request->profit;


        $product->save();

        return redirect('/product');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Product::find($id);
        return view('product.details')->with('result', $result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Product::find($id);
        return view('product.edit')->with('result', $result);
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

        if($request->hasFile('picture')){
            // Get filename with the extension
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('picture')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('picture')->storeAs('public/picture', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $product= Product::find($id);
        $product->product_name = $request->product_name;
        $product->supplier_id = $request->supplier_id;
        $product->cat_id = $request->cat_id;
        $product->status = $request->status;
        $product->user_id = 1;
        $product->picture = $fileNameToStore;
        $product->alert_quantity = $request->alert_quantity;
        $product->sale_price = $request->sale_price;
        $product->purches_price = $request->purches_price;
        $product->profit = $request->profit;


        $product->save();

        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productdelete = Product::find($id);
        $productdelete->delete();
        return redirect('/product')->with('Success!!','Product Deleted');
    }
}
