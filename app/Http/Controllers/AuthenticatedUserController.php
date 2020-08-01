<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticatedUserController extends Controller
{
    public function getAuthenticatedUser(){
        return 1;
    }

    public function getAuthenticatedUserEmail(){
        return 'julisema4@gmail.com';
    }
}
