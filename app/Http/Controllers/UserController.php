<?php

namespace App\Http\Controllers;

use App\Actions\CreateUserAction;
use App\Actions\FindUserAction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function show(Request $request, FindUserAction $findUser): View
    {
        $user = $findUser->handle($request->id);

        if($user != null)
            return view('user.show', [ 'user' => $user] );
        
        return view('user.not-found');
    }

    public function create(): View
    {
        return view('user.create');
    }

    public function store(Request $request, CreateUserAction $createUser)
    {
        // Esta requisição não está validada! Esse assunto será abordado em um módulo específico!
        $user = $createUser->handle($request->name, $request->email, $request->password);

        return redirect('/user/'.$user->id);
    }

    public function search()
    {
        return view('user.search');
    }

    public function find(Request $request)
    {
        $user = User::where('name', 'like', '%'.$request->name.'%')->firstOrFail();

        return redirect('/user/'.$user->id);
    }
}
