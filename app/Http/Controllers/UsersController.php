<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UsersController extends Controller
{

    public function showLoginForm()
    {
        return view('users.login');
    }

    public function showRegisterForm()
    {
        return view('users.register');
    }

}
