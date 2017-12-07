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
        $links = Link::approved()->latest()->filter(request(['month', 'year']))->get();
        
        $archives = Link::selectRaw('year(created_at) year, monthname(created_at) month, count(*) approved')
                                    ->groupBy('year', 'month')
                                    ->orderByRaw('min(created_at) desc')
                                    ->get()
                                    ->toArray();

        return view('links.index', compact('links', 'archives'));
    }
}
