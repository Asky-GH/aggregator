<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinkController extends Controller
{
    public function index(){
        $links = Link::approved()->latest()->filter(request(['month', 'year']))->get();

        $archives = Link::selectRaw('year(created_at) year, monthname(created_at) month, count(*) approved')
                        ->groupBy('year', 'month')
                        ->orderByRaw('min(created_at) desc')
                        ->get()
                        ->toArray();

        return view('links.index', compact('links', 'archives'));
    }

    public function show(Link $link){
        $archives = Link::selectRaw('year(created_at) year, monthname(created_at) month, count(*) approved')
                        ->groupBy('year', 'month')
                        ->orderByRaw('min(created_at) desc')
                        ->get()
                        ->toArray();

        return view('links.show', compact('link', 'archives'));
    }

    public function create(){
        $archives = Link::selectRaw('year(created_at) year, monthname(created_at) month, count(*) approved')
                        ->groupBy('year', 'month')
                        ->orderByRaw('min(created_at) desc')
                        ->get()
                        ->toArray();

        return view('links.create', compact('archives'));
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
