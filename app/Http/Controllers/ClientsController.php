<?php

namespace App\Http\Controllers;

use App\Client;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return \view('/clients/index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients/create');
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
            'name'=>'required',
            'email'=>'required',
            'phone_no'=>'required',
            'city'=>'required'
        ]);

        $client = new Client([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone_no' => $request->get('phone_no'),
            'city' => $request->get('city'),
            'address' => $request->get('address'),
            'company_name' => $request->get('company_name')
        ]);
        $client->save();
        return redirect('/clients')->with('success', 'Client saved!');
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
        $client = Client::find($id);
        return \view('clients.edit', compact('client'));
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
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone_no'=>'required',
            'city'=>'required'
        ]);

        $client = Client::find($id);
            $client->name = $request->get('name');
            $client->email = $request->get('email');
            $client->phone_no = $request->get('phone_no');
            $client->city = $request->get('city');
            $client->address = $request->get('address');
            $client->company_name = $request->get('company_name');

        $client->save();
        return redirect('/clients')->with('update', 'Client Updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();

        return \redirect('/clients')->with('delete','Contact is deleted');
    }
}
