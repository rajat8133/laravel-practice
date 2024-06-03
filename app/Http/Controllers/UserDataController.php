<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserData\StoreUserDataRequest;
use App\Http\Requests\UserData\UpdateUserDataRequest;
use App\Models\UserData;

class UserDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UserData::all();
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
    public function store(StoreUserDataRequest $request)
    {

        $validateData = $request->validated([

        ]);

        $userdata = new UserData();

        $userdata->fill($validateData);

        $userdata->save();

        return $userdata;

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
    public function update(UpdateUserDataRequest $request, int $id)
    {
        $userdata = UserData::findOrFail($id);

        $userdata->update($request->all());

        return response($userdata);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserData $userData)
    {
        $userData->delete();

        return response([
            'message' => 'delete successfully!',
        ]);

    }
}
