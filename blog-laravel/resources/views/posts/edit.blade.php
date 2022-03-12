@extends("layouts.app")

@section("content")
    <h1>Edit post</h1>
    <form method="POST" action="{{route("posts.update", $post->id)}}">
        <div class="form-group">
            @csrf
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" placeholder="Content" rows="10">{{$post->content}}</textarea>
        </div>
        <input type="hidden" value="put" name="_method">
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
