<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index(){
        return view('settings.email');
    }

    public function store(){
        $this->validate(request(), [
            'email' => 'required|email',
        ]);

        $user = request()->user();
        $user->email = request('email');
        $user->save();

        session()->flash('message', 'Ваш Email адрес успешно обновлен!');
        
        return redirect('/links');
    }
}
