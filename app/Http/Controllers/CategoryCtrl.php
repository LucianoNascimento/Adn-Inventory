<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
=======
>>>>>>> 763267dc7dfe36f97025aeff9ddd3147020b552a

class CategoryCtrl extends Controller
{

<<<<<<< HEAD
    public function __construct()
    {
        $this->middleware('auth');
    }

=======
>>>>>>> 763267dc7dfe36f97025aeff9ddd3147020b552a
    public function index()
    {
        $results = Category::all();
        return view('category.index')->with('results', $results);
    }


    public function create()
    {
        return view('category.create');

    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:35',
            'label' => 'required',
            'status' => 'required'
        ]);

        $category = new Category();
<<<<<<< HEAD
        $category->name = $request->name;
        $category->label = $request->label;
        $category->status = $request->status;
        $category->user_id = 1;
=======
        $category->name =  $request->name;
        $category->label =  $request->label;
        $category->status =  $request->status;
        $category->user_id =  1;
>>>>>>> 763267dc7dfe36f97025aeff9ddd3147020b552a
        $category->save();

        return redirect('/category');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
<<<<<<< HEAD
        $result = Category::find($id);
        return view('category.edit')->with('result', $result);

=======
        //
>>>>>>> 763267dc7dfe36f97025aeff9ddd3147020b552a
    }


    public function update(Request $request, $id)
    {
<<<<<<< HEAD
        $category = Category::find($id);
        $category->name = $request->name;
        $category->label = $request->label;
        $category->status = $request->status;
        $category->user_id = 1;
        $category->save();

        return redirect('/category');

=======
        //
>>>>>>> 763267dc7dfe36f97025aeff9ddd3147020b552a
    }

    public function destroy($id)
    {
        //
    }
}
