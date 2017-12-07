<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinkController extends Controller
{
    public function index(){
        $links = Link::approved()->latest()->filter(request(['month', 'year']))->get();

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
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'url' => 'required|url|max:255',
        ]);

        auth()->user()->addLink(new Link(request(['title', 'url', 'description'])));

        session()->flash('message', 'Ваша ссылка отправлена на рассмотрение администратору!');
        
        return redirect('/links');
    }
}
