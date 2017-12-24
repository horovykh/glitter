<div class="post box">
    <div class="avatar"><img src="{{$post->user->avatar_url}}"/></div>
    <div class="text">
        <a class="username" href="{{url('/user/'.$post->user_id)}}">{{$post->user->name}}</a>:
        {{$post->post}}
    </div>
    <div class="meta">
        <div class="date">{{$post->created_at}}</div>
        <div class="permalink"><a href="{{url('/post/'.$post->id)}}">#</a></div>
        <div class="links">
            <a href="#">Reply</a>
            <a href="#">Repost</a>
        </div>
    </div>
</div>