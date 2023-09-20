<?php

namespace App\Http\Controllers;

use App\Actions\FindUserAction;
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

    public function find(Request $request, FindUserAction $findUser): View
    {
        $user = $findUser->handle($request->id);

        if($user != null)
            return view('profile', [ 'user' => $user] );
        
        return view('profile-not-found');
    }
}
