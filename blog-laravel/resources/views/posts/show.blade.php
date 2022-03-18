@extends("layouts.app")

@section("content")
<div class="container">
    <a href="/posts" class="btn btn-primary">Go back</a>
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small><br><br>

    <p style="font-size: 15px">{{$post->content}}</p>
    @if(!Auth::guest())
        <div>
        <form method="post" action="{{route("likes.like", $post->id)}}">
            @csrf
            @if(!App\Models\Like::where(['user_id' =>Auth::user()->id, "post_id"=>$post->id])->first())
            <button class="btn btn-primary">Like</button>
            @else
                <button class="btn btn-primary">Unlike</button>
                @endif
        </form>
            <h3 class="comment-title">{{$post->comments->count()}} comments</h3>
            @foreach($post->comments as $comment)
                <div>
                    <div class="author-info">
                        <img src="{{"https://www.gravatar.com/avatar/". md5(trim(Auth::user()->email))."?d=monsterid"}}" class="author-image">

                        <div class="author-name">
                            <h4>{{$comment->name}}</h4>
                            <p class="author-time">{{date("F nS, Y - G:i", strtotime($comment->created_at))}}</p>
                        </div>
                    </div>

                    <div class="comment-content">
                        {{$comment->comment}}
                    </div>
                    @if(Auth::user()->id == $post->user_id)
                        <form method="post" action="{{route("comments.destroy", $post->id)}}">
                            @csrf
                            <button>Delete</button>
                        </form>
                        @endif
                </div>
                <br>
            @endforeach
            <form method="post" action="{{route("comments.store", $post->id)}}">
                @csrf
                <label name="name" class="form-label">Name</label>
                <input name="name" class="form-control">
                <label name="text" class="form-label">Comment</label>
                <textarea type="text" name="text" class="form-control"></textarea><br>
                <button type="submit" class="btn btn-success">Add comment</button>
            </form>

        @if(Auth::user()->id == $post->user_id)


    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary float-start">Edit</a>
    <form method="post" action="{{route("posts.destroy", $post->id)}}">
        @csrf
        <input type="hidden" value="delete" name="_method">
        <button class="btn btn-danger float-end">Delete</button>
    </form>
        </div>

    @endif
    @endif

</div>
@endsection
