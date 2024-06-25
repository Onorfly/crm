<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return Role::get();
    }
    public function create(Request $request)
    {
        return response()->json([$request->has('name')]);
/*        Role::create([
           'name' => 'manager',
        ]);*/
        return response()->json(true);
    }

    public function show(Role $role)
    {
        return response()->json(['data' => $role]);
    }

    public function users(Role $role)
    {
        return $role->users->map->name;
        /*return $role->users()->orderByDesc('id')->first();*/
    }
}
