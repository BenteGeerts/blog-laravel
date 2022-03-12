@extends("layouts.app")

@section("content")
    <h1>Create post</h1>
    <form method="post" action="{{Route("posts.store")}}">
        <div class="form-group">
            @csrf
            <label for="title" id="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="content" id="content">Content</label>
            <textarea id="content" name="content" class="form-control" placeholder="Content" rows="10"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
