<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employee\StoreEmployeeRequest;
use App\Http\Requests\Employee\UpdateEmployeeRequest;
use App\Models\Employee;
use Illuminate\Contracts\Cache\Store;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();

        return view('employees.index', compact('employees'));
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
    public function store(StoreEmployeeRequest $request)
    {
        $request = $request->validated();

        $employee = Employee::create([
            'email' => $request->email,
        ]);

        foreach ($request->phone_numbers as $phoneNumber) {
            $employee->phoneNumbers()->create([
                'phone_number' => $phoneNumber,
            ]);
        }

        return redirect()->route('employees.index');
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
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->fill($request->validated());

        $employee->update([
            'email' => $request->email,
        ]);

        $employee->phoneNumbers()->delete();

        foreach ($request->phone_numbers as $phoneNumber) {
            $employee->phoneNumbers()->create([
                'phone_number' => $phoneNumber,
            ]);
        }

        return redirect()->route('employees.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return response([
            'message' => 'delete successfully',
        ]);
    }
}
