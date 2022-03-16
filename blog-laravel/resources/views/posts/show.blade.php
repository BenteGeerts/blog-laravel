@extends("layouts.app")

@section("content")
<div class="container">
    <a href="/posts" class="btn btn-primary">Go back</a>
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small><br>

        {{$post->content}}<br>
    @if(!Auth::guest())

        <form method="post" action="{{route("likes.like", $post->id)}}">
            @csrf
            <button class="btn btn-primary">Like</button>
        </form>
        @if(Auth::user()->id == $post->user_id)


    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    <hr>
    <form method="post" action="{{route("posts.destroy", $post->id)}}">
        @csrf
        <input type="hidden" value="delete" name="_method">
        <button class="btn btn-danger">Delete</button>
    </form>

            <h3 class="comment-title">{{$post->comments->count()}} comments</h3>
        @foreach($post->comments as $comment)
            <div>
                <div class="author-info">
                    <img src="{{"https://www.gravatar.com/avatar/HASH"}}" class="author-image">

                    <div class="author-name">
                    <h4>{{$comment->name}}</h4>
                    <p class="author-time">{{$comment->created_at}}</p>
                    </div>
                </div>

                <div class="comment-content">
                {{$comment->comment}}
                </div>
            </div>
            <br>
            @endforeach
        <form method="post" action="{{route("comments.store", $post->id)}}">
            @csrf
            <label name="name">Name</label>
            <input name="name">
            <label name="text">Comment</label>
            <textarea type="text" name="text"></textarea>
            <button type="submit" class="btn btn-success">Add comment</button>
        </form>

</div>
        @endif
    @endif
@endsection
