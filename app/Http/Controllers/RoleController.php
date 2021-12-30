<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function role()
    {
        $role=Auth::user()->role;

        if($role=='Administrator') {
            return view('layouts.admin.dashboard');
        } else {
            return view('layouts.pengguna.dashboard');
        }
    }
}
