<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentMark\StoreStudentMarkRequest;
use App\Http\Requests\StudentMark\UpdateStudentMarkRequest;
use App\Models\StudentMark;

class StudentMarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return StudentMark::all();
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
    public function store(StoreStudentMarkRequest $request)
    {
        $request = $request->validated();

        $UserStudentMark = StudentMark::create($request);

        return $UserStudentMark;

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
    public function update(UpdateStudentMarkRequest $request, Studentmark $studentmark)
    {
        $studentmark->fill($request->validated());

        $studentmark->update();

        return $studentmark;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(studentmark $studentmark)
    {
        $studentmark->delete();

        return response([
            'message' => 'delate successfully',
        ]);
    }
}
