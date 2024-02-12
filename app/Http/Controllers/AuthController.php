<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return "Logged in";
    }

    public function logout() {
        return "Logged out";
    }

    public function register() {
        return "Registered";
    }
}
