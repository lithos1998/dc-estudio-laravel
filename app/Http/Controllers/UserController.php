<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        return view('panel.users.index', compact('users'));
    }

    public function edit(String $id){
        $user = User::findOrFail($id);
        return view('panel.users.edit', compact($user));
    }
}
