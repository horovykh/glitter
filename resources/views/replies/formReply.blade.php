@foreach($posts as $post)
@auth
    <form action="{{action('CommentController@store', $post->id)}}" method="POST">
        {{csrf_field()}}
        <div class="publish"><div class="wrapper">
                <textarea placeholder="Welcome to add your reply!!!" name="text"></textarea>
                <button type="submit">Send</button>
            </div>
        </div>
    </form>
@endauth
@endforeach