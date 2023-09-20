<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function profile(Request $request): View
    {
        dd($request);
        
        return view('profile', [ 'user' => User::first()] );
    }

    public function find(string $id): View
    {
        return view('profile', [ 'user' => User::findOrFail($id)] );
    }
}
