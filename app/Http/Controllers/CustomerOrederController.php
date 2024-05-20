<?php

namespace App\Http\Controllers;

use App\Models\CustomerOrder;
use Illuminate\Http\Request;

class CustomerOrederController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CustomerOrder::all();
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
    public function store(Request $request)
    {
        $request = $request->validated();

        $UserCustomerOrder = CustomerOrder::create($request);

        return $UserCustomerOrder;

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
    public function update(Request $request, CustomerOrder $customerOrder)
    {
        $customerOrder->fill($request->validated());
        $customerOrder->update;

        return $customerOrder;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerOrder $customerOrder)
    {
        $customerOrder->delete();

        return response([
            'message' => 'deleted successfully',
        ]);
    }
}
