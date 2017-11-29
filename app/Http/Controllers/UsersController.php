<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Post;

class UsersController extends Controller
{
    public function showUserPosts($userPosts)
    {
        return view('index', ['posts' => Post::where('user_id', $userPosts)->orderBy('id', 'DESC')->get()]);
    }
}
