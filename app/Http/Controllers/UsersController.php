<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function create(){
        return view('users.create');
    }

    public function show(User $user){
        return view('users.show',compact('user'));//通过 compact 方法转化为一个关联数组
    }
    
    public function store(Request $request) { 
        $this->validate($request, [ 
            'name' => 'required|unique:users|max:50', 
            'email' => 'required|email|unique:users|max:255', 
            'password' => 'required|confirmed|min:6' 
        ]); 
        return; 
    }
}
