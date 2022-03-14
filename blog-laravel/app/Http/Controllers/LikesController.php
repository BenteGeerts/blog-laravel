<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikesController extends Controller
{

    public function like($postId, $userId)
    {
        $like = new Like();
        $like->user_id = $userId;
        $like->post_id = $postId;
        $like->save();
        return redirect("/posts")->with("success", "Post Liked");
    }

    public function Dislike(Request $request)
    {

    }
}
