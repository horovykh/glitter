@extends('layouts.app')
@auth
    @section('content')
        <ul><strong>Your PROFILE</strong></ul>
        <ul>
            <li>
                <label for="name">Name</label>
                {{$user->name}}
            </li>
            <li>
                <label for="email">Email</label>
                {{$user->email}}
            </li>
            <li>
                <label for="avatar_url">Avatar</label>
                <img src="{{$user->avatar_url}}">
            </li>
            <br>
            <li>
                <form class="" method="POST" action="{{action('UsersController@update')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <label for="file" class="">New Avatar</label>
                    <div class="">
                        <input type="file" class="form-group" name="avatar_image">
                    </div>
                    <button type="submit" class="btn btn-primary">Change Avatar</button>
                </form>
            </li>
            </ul>
    @endsection
@else
    @section('content')
        <ul>
            <strong>Please login to view your profile !</strong>
        </ul>
    @endsection
@endauth
