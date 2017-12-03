<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinkController extends Controller
{
    public function index(){
        $links = Link::approved()->get();

        return view('links', compact('links'));
    }

    public function show(Link $link){
        return view('link', compact('link'));
    }
}
