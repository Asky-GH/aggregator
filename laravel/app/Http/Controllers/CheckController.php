<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class CheckController extends Controller
{    
    public function index(){
        $links = Link::unapproved()->latest()->filter(request(['month', 'year']))->get();
        
        return view('links.pending', compact('links'));
    }

    public function edit(Link $link){
        return view('links.edit', compact('link'));
    }
}
