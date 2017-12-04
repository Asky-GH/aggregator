<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinkController extends Controller
{
    public function index(){
        $links = Link::approved()->latest()->get();

        return view('links.index', compact('links'));
    }

    public function show(Link $link){
        return view('links.show', compact('link'));
    }

    public function create(){
        return view('links.create');
    }

    public function store(){
        $this->validate(request(), [
            'title' => 'required',
            'description' => 'required',
            'url' => 'required',
        ]);

        Link::create(request(['title', 'description', 'url']));

        return redirect('/links');
    }
}
