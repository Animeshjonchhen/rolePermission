<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('User.index',[
            'users' => User::all()
        ]);
    }

    public function create()
    {
        return view('User.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8'
        ]);

        $attributes['password'] = Hash::make($attributes['password']);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/users');
    }

    public function edit(User $user)
    {
        return view('User.update',[
            'user' => $user
        ]);
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8'
        ]);

        $attributes['password'] = Hash::make($attributes['password']);

        $user->update($attributes);

        return redirect('/users');
    }

    public function delete(User $user)
    {
        $user->delete();

        return redirect('/users');
    }
}
