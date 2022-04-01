<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('user', [
            'title' => 'User',
            'user'  => User::all(),
            'no'    => 1
        ]);
    }

    public function detailUser(User $user)
    {
        return view('detailuser', [
            'title' => $user->name,
            'user'  => $user
        ]);
    }

    public function tambah(Request $request)
    {   
        User::create($request->all());

        return redirect('/user');
    }
}
