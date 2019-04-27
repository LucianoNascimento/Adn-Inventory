<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mailboxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('mailbox.index');
    }


    public function create()
    {
        return view('mailbox.compose');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return view('mailbox.read');
    }


    public function edit($id)
    {

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
