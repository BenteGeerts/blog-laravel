@extends("layouts.app")

@section("content")
    <div class="px-4 py-5 my-5 text-center border">
        <h1 class="display-5 fw-bold">Hi</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Welcome to Bente's blog</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="/login" type="button" class="btn btn-primary btn-lg px-4 gap-3">Login</a>
                <a href="/register" type="button" class="btn btn-primary btn-lg px-4">Register</a>
            </div>
        </div>
    </div>
@endsection
