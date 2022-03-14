<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikesController extends Controller
{

    public function like($postId)
    {
        $like = new Like();
        $like->user_id = Auth::user()->id;
        $like->post_id = $postId;
        $like->save();
        return redirect("/posts")->with("success", "Post Liked");
    }

    public function Dislike(Request $request)
    {

    }
}
