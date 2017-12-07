<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index(){
        return view('settings.password');
    }

    public function store(){
        $this->validate(request(), [
            'password' => 'required|confirmed|min:6',
        ]);

        $user = request()->user();
        $user->password = bcrypt(request('password'));
        $user->save();

        session()->flash('message', 'Ваш пароль успешно обновлен!');
        
        return redirect('/links');
    }
}
