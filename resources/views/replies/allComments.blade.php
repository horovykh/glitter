@foreach($posts as $post)
    @include('partials.onePost')
@endforeach
@foreach($post->comments as $reply)
    <div class="post box">
          <div class="avatar"><img src="{{$reply->user->avatar_url}}"/></div>
            <div class="text">
                <a class="username" href="{{url('/user/'.$reply->user_id)}}"> Comment of @ {{$reply->user->name}}</a>:
                {{$reply->text}}
            </div>
            <div class="meta">
                <div class="date">{{$reply->created_at}}</div>
            </div>
        </div>
@endforeach
