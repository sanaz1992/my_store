<?php
namespace App\Http\Controllers;

class UserController extends Controller
{
    public function show($id)
    {
            return "user id is:" . $id;
       
    }
}
