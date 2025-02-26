<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Actions\Fortify\CreateNewUser;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(AuthRequest $request)
    {
        dd($request->all());
        $user = (new CreateNewUser())->create($request->all());

        return Redirect::to('/login');
    }
}
