<?php

namespace App\Http\Controllers;

use App\User;   

use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function __constructor() 
    {
        $this->middleware('auth');
    }
    
    public function store(User $user) 
    {

        return auth()->user()->following()->toggle($user->profile);
    }
}

// this is a many to many relantionship