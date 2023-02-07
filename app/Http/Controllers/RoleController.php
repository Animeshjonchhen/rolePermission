<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role as prole;


class RoleController extends Controller
{
    public function index()
    {
        return view('Role.index', [
            'users' => User::with('roles')->get(),
        ]);
    }

    public function create()
    {
        return view('Role.create', [
            'users' => User::all(),
            'permissions' => Permission::all()
        ]);
    }

    public function store()
    {
        $permissions = request()->permissions;
        $user = User::findOrFail(request()->user_id);
        
        $newRole = prole::create(['name' => request()->rolename]);

        foreach ($permissions as $permission) :
            $newRole->givePermissionTo($permission);
        endforeach;

        $user->assignRole($newRole);

        return redirect('/roles');
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
