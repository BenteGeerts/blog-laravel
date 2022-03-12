@extends("layouts.app")

@section("content")
    <h1>Create post</h1>
    <form>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" placeholder="Content" rows="10"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
