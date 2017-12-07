@auth
    <form action="{{action('PostController@store')}}" method="POST">
        {{csrf_field()}}
    <div class="publish"><div class="wrapper">
            <textarea placeholder="What's on your mind?" name="post"></textarea>
            <button type="submit">Send</button>
        </div>
    </div>
    </form>
@endauth
