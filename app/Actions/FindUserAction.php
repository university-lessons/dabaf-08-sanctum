<?php

namespace App\Actions;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class FindUserAction
{
    public function handle(string $id): ?User
    {
        $user = User::find($id);

        return $user;
    }
}