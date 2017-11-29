@extends('layouts.post')

@section('content')
    <div class="content wrapper">
        @foreach($posts as $post)
        <div class="post box">
            <div class="avatar"><img src="http://unsplash.it/50/50"/></div>
            <div class="text">
                <a class="username" href="#">{{$post->user->name}}</a>:
                {{$post->post}}
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