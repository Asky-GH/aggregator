<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinkController extends Controller
{
    public function index(){
        $links = Link::approved()->get();

        return view('main', compact('links'));
    }

    public function show($id){
        $link = Link::find($id);
        
        return view('link', compact('link'));
    }
}
