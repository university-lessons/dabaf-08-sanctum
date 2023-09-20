<?php

namespace App\Http\Controllers;

use App\Actions\CreateUserAction;
use App\Actions\FindUserAction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function profile(Request $request): View
    {
        dd($request);
        
        return view('user.profile', [ 'user' => User::first()] );
    }

    public function find(Request $request, FindUserAction $findUser): View
    {
        $user = $findUser->handle($request->id);

        if($user != null)
            return view('user.profile', [ 'user' => $user] );
        
        return view('user.profile-not-found');
    }

    public function new(): View
    {
        return view('user.new');
    }

    public function create(Request $request, CreateUserAction $createUser)
    {
        // Esta requisição não está validada! Esse assunto será abordado em um módulo específico!
        $user = $createUser->handle($request->name, $request->email, $request->password);

        return redirect('/find/'.$user->id);
    }
}
