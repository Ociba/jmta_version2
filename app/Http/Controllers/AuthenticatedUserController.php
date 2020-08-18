<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticatedUserController extends Controller
{
    public function getAuthenticatedUser(){
        return auth()->user()->id;
    }

    public function getAuthenticatedUserEmail(){
        return auth()->user()->id;
    }
}
