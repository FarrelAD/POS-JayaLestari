<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showAllUsers()
    {
        return view('users.users');
    }

    public function showUserDetail($id, $name) {
        return "Hello $name! You have ID $id isn't it ?";
    }
}
