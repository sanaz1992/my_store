<?php
namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::first();
        return view('welcome', compact('user'));
    }
}
