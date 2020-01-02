<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //
    public function index($user)
    {
        // if user doesn't exits, return 404, and not error!
        $user = User::findOrFail($user);
        
        return view('home', [
        	'user' => $user,
        ]);
    }
}
