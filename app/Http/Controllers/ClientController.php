<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\StoreClientRequest;
use App\Http\Requests\Client\UpdateClientRequest;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Client::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {

        // 1   ====== Direct Value Assign=====

        // $client = new Client();
        // $client->client_name = 'Rajat';
        // $client->contact = '784459615';
        // $client->address = 'vpo kangra';
        // $client->client_type = ' retails';
        // $client->client_since = '02/05/2024';
        // $client->client_status = ' active';
        // $client->save();

        // return $client;

        // 2 ===== Create  Mathod =====

        // $client = Client::create([
        //     'client_name' => $request->client_name,
        //     'contact' => $request->contact,
        //     'address' => $request->address,
        //     'client_type' => $request->client_type,
        //     'client_since' => $request->client_since,
        //     'client_status' => $request->client_status,
        // ]);

        // return $client;

        // 3  ===== fill mathod ======

        $validateData = $request->validated([

        ]);
        $client = new Client();
        $client->fill($validateData);
        $client->save();

        return $client;

        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, int $id)
    {

        $client = Client::findOrFail($id);

        $client->update($request->all());

        return response($client);

        // $client = Client::find($id);

        // $validateData = $request->validated();

        // $client->fill($validateData);

        // $client->update();

        // return $client;

        // return redirect('/')->with('status', 'data Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return response([
            'message' => 'delete successfully',
        ]);

    }
}
