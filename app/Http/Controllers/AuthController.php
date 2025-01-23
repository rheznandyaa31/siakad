<?php

namespace App\Http\Controllers; // Namespace yang benar

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Import class Controller

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('p.login');
    }

    public function login(Request $request)
    {
        // Handle login logic here
        // Contoh sederhana, redirect ke dashboard
        return redirect('/dashboard');
    }
}