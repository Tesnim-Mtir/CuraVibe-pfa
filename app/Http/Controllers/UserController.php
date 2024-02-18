<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //


    public function newtraitment()
    {
        return view('Userspace.newtraitment');
    }

    public function history()
    {
       return view('Userspace.history');
    }

    public function profile()
    {
       return view('Userspace.profile');
    }
    public function ongoing()
    {
       return view('Userspace.ongoing');
    }
}
