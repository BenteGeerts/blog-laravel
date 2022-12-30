@extends("layouts.app")

@section("content")
    <h1>Posts</h1>
    @if(count($posts) >= 1)
        @foreach($posts as $post)
            <div class ="card mb-4">
                <ul>
                    <a href="/posts/{{$post->id}}"><li><h5 class="mt-3">{{$post->title}}</h5></li></a><br>
                    <p>{{substr($post->content, 0, 50)}}...</p>
                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                </ul>
            </div>
        @endforeach
        {{--{{$posts->links()}}--}}
    @else
        <p>No posts found</p>
    @endif
@endsection
