<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::approved()->latest()->get();
        
        return view('links.index', compact('links'));
    }
}
