<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function index()
    {
        if (Auth::user()->role == 'admin') {
            return view('admin.index');
        };
        return view('user.index');
    }
}
