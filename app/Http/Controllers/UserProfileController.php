<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{


    public function account(){
        return view('profile.account');
    }

    public function newAddress(){
        return view('includes.address');
    }
}
