<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use App\Comment;

class CommentController extends Controller
{
    public function store(Link $link){
        $this->validate(request(), [
            'body' => 'required|max:255'
        ]);

        Comment::create([
            'user_id' => auth()->id(),
            'link_id' => $link->id,
            'body' => request('body')
        ]);

        return back();
    }
}
