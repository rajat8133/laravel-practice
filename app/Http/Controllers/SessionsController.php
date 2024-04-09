<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (! auth()->attempt($attributes)) {

            throw ValidationException::withMessages([
                'email' => 'your provided credentials colud not be varified.',
            ]);

        }

        session()->regenerate();

        return redirect('/')->with('success', 'welcome Back');

    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');

    }
}
