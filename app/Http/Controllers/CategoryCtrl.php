<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryCtrl extends Controller
{

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
        $category->name =  $request->name;
        $category->label =  $request->label;
        $category->status =  $request->status;
        $category->user_id =  1;
        $category->save();

        return redirect('/category');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
