<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index() {
        // Auth::user()->hasRole('user') // authorization
        if(Auth::user()){
            return view('welcome'); //can be changed to any where
        }
    }
}
