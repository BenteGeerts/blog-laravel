<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikesController extends Controller
{

    public function like($postId)
    {
        $find = Like::where(['user_id' =>Auth::user()->id, "post_id"=>$postId])->first();
        if($find == null)
        {
            $like = new Like();
            $like->user_id = Auth::user()->id;
            $like->post_id = $postId;
            $like->save();
            return redirect("/posts")->with("success", "Post Liked");
        }
        else
        {
            $find->delete();
            return redirect("/posts")->with("error", "Like removed");
        }

    }
}
