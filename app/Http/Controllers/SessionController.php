<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('Session.login');
    }

    public function store()
    {
        $credentials = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (!auth()->attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified'
            ]);
        }

        return redirect('/users');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {
        auth()->logout();

        return redirect('/login');
    }
}
