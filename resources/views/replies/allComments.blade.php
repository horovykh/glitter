@foreach($posts as $post)
    @include('partials.onePost')
@endforeach

@foreach($post->comment as $commit)
    <div class="post box">
          <div class="avatar"><img src="{{$post->user->avatar_url}}"/></div>
            <div class="text">
                <a class="username">Comment of @ {{$post->user->name}}</a>:
                {{$commit->comment}}
            </div>
            <div class="meta">
                <div class="date">{{$commit->created_at}}</div>
            </div>
        </div>
@endforeach

