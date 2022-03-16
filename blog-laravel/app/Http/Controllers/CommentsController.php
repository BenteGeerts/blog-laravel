<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{

    public function store(Request $request, $postId)
    {
        $this->validate($request, ["text"=>"required", "name"=>"required"]);

        $comment = new Comment();
        $comment->comment = $request->input("text");
        $comment->name = $request->input("name");
        $comment->post_id = $postId;
        $comment->user_id = Auth::user()->id;
        $comment->save();
        return redirect(route("posts.show", $postId))->with("success", "Comment was added");
    }
}
