<?php

namespace App\Http\Controllers;

use App\User;
//use Illuminate\Support\Facades\Auth;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//use Illuminate\Foundation\Auth\RegistersUsers;




class UsersController extends Controller
{
    public function showUserPosts($userPosts)
    {
        return view('index', ['posts' => Post::where('user_id', $userPosts)->orderBy('id', 'DESC')->simplePaginate()]);
    }

    public function showProfile(User $user){

        return view('auth.profile',['user' => auth()->user()]);
    }

    public function update(Request $request){

            $request->validate([
            'avatar_image'=>'max:250|image|required|mimes:jpeg,png,jpg'
            ]);

            $user = auth()->user();
            $path = $request->file('avatar_image')->store('public');
            $user->avatar_url = asset(Storage::url($path));
            $user->save();
            //Storage::delete('file.jpg');

            return redirect(action('UsersController@showProfile', $user['id']));

    }
}
