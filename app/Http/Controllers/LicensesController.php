<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\License;

class LicensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $licenses =  License::all();
        return view('pages.license')->with('licenses', $licenses);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'imei' => 'required',
            'key' => 'required',
            'name' => 'required',
            'email' => 'required',
            'registration_date' => 'required',
            'activation_date' => 'required',
            'expiration_date' => 'required',
            'van_sales' => 'required',
            'sync' => 'required'
        ]);

        // Create a new license
        $license = new License;
        $license->imei = $request->input('imei');
        $license->key = $request->input('key');
        $license->name = $request->input('name');
        $license->email = $request->input('email');
        $license->registration_date = $request->input('registration_date');
        $license->activation_date = $request->input('activation_date');
        $license->expiration_date = $request->input('expiration_date');
        $license->validity = $request->input('validity');
        // $license->remaining_days = $request->input('remaining_days');
        // $license->last_sync = $request->input('last_sync');
        // $license->last_sync_time = $request->input('last_sync_time');
        $license->van_sales = $request->input('van_sales');
        $license->sync = $request->input('sync');
        $license->save();

        return redirect('/license')->with('success', 'License created successfully');
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
        //
        $license = License::find($id);
        return view('pages.edit')->with('license', $license);
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
        $this->validate($request,[
            'imei' => 'required',
            'key' => 'required',
            'name' => 'required',
            'email' => 'required',
            'registration_date' => 'required',
            'activation_date' => 'required',
            'expiration_date' => 'required',
            'van_sales' => 'required',
            'sync' => 'required'
        ]);

        // Create a new license
        $license = License::find($id);
        $license->imei = $request->input('imei');
        $license->key = $request->input('key');
        $license->name = $request->input('name');
        $license->email = $request->input('email');
        $license->registration_date = $request->input('registration_date');
        $license->activation_date = $request->input('activation_date');
        $license->expiration_date = $request->input('expiration_date');
        $license->validity = $request->input('validity');
        // $license->remaining_days = $request->input('remaining_days');
        // $license->last_sync = $request->input('last_sync');
        // $license->last_sync_time = $request->input('last_sync_time');
        $license->van_sales = $request->input('van_sales');
        $license->sync = $request->input('sync');
        $license->save();

        return redirect('/license')->with('success', 'License updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $license = License::find($id);
        $license->delete();
        return redirect('/license')->with('success', 'License removed successfully');
    }
}
