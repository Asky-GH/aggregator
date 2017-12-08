<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function show(Tag $tag){
        $links = $tag->links;

        return view('links.index', compact('links'));
    }

    public function create(){
        return view('create');
    }

    public function store(){
        $this->validate(request(), [
            'name' => 'required|max:255',
        ]);

        $tag = new Tag;
        $tag->name = request('name');
        $tag->save();
        
        return redirect('/pending');
    }
}
