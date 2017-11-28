@extends('layouts.post')

@section('content')
    <div class="content wrapper">
        @foreach($users as $user)
            <div class="post box">
                <div class="avatar"><img src="{{$user->avatar_url}}"/></div>
                <div class="text">
                    <a class="username" href="#">{{$user->name}}</a>:
                    Lorem
                </div>
                <div class="meta">
                    <div class="date">15.11.2017</div>
                    <div class="permalink"><a href="#">#</a></div>
                    <div class="links">
                        <a href="#">Reply</a>
                        <a href="#">Repost</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection