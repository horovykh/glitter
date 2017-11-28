<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getUser(){

        $users = \App\User::all();
        return view('users.index',['users'=>$users]);

    }
}
