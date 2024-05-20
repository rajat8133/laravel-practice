<?php

namespace App\Http\Controllers;

use App\Http\Requests\Shipment\StoreShipmentRequest;
use App\Http\Requests\Shipment\UpdateShipmentRequest;
use App\Models\Shipment;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shipments = Shipment::all();
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
    public function store(StoreShipmentRequest $request)
    {
        // $validateData = $request->validate([
        //     'tracking_number' => 'required',
        //     'shipment_status' => 'required',
        //     'carrier_name' => 'required',
        //     'destination' => 'required',
        //     'order_number' => 'required',
        //     'shipment_date' => 'required',
        // ]);

        $shipment = new Shipment();
        $shipment->fill($request->only('tracking_number', 'carrier_name', 'order_number', 'shipment_date'));
        $shipment->save();
        //dd($shipment->toArray());

        return $shipment;

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

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
    public function update(UpdateShipmentRequest $request, Shipment $shipment)
    {
        $shipment->fill($request->only('tracking_number', 'carrier_name', 'order_number', 'shipment_date'));
        $shipment->update();
        dd($shipment->toArray());

        return $shipment;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(shipment $shipment)
    {
        $shipment->delete();
        dd($shipment->toArray());

        return response([
            'message' => 'delete successfully',
        ]);
    }
}
