<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser()
    {
        // return "Code step by step";
        return view('user');
    }
    function aboutUser()
    {
        return "Code about";
    }
    function getUserName($name)
    {
        return "Hello this is " . $name;
    }
    function userHome()
    {
        $name = 'Anil';
        $user = ['anil', 'sam', 'peter'];
        return view('home', ['name' => $name, 'user' => $user]);
    }
}