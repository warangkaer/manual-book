<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('layouts.website');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        $app = App::select('name', 'id')->orderBy('name')->get();

        return view('listManual', compact('app'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
