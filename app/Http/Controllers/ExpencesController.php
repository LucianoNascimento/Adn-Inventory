<?php

namespace App\Http\Controllers;

use App\expences;
use Illuminate\Http\Request;

class ExpencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = expences::all();
        return view('expences.index')->with('results', $results);
    }


    public function create()
    {
        return view('expences.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:expences|max:50',
            'purpose' => 'required',
            'amount' => 'required'
        ]);

        $expence = new expences();

        $expence->title = $request->title;
        $expence->user_id = 1;
        $expence->purpose = $request->purpose;
        $expence->amount = $request->amount;

        $expence->save();

        return redirect('/expences');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\expences  $expences
     * @return \Illuminate\Http\Response
     */
    public function show(expences $expences)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\expences  $expences
     * @return \Illuminate\Http\Response
     */
    public function edit(expences $expences)
    {
        $result = expences::find($expences);
        return view('expences.edit')->with('result', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\expences  $expences
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, expences $expences)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\expences  $expences
     * @return \Illuminate\Http\Response
     */
    public function destroy(expences $expences)
    {
        //
    }
}
