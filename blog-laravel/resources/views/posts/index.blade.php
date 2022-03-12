@extends("layouts.app")

@section("content")
    <h1>Posts</h1>
    @if(count($posts) > 1)
        @foreach($posts as $post)
            <div class ="card">
                <ul>
                    <a href="/post/{{$post->id}}"><li>{{$post->title}}</li></a>
                    <li>{{$post->content}}</li>
                    <small>Written on {{$post->created_at}}</small>
                </ul>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection
