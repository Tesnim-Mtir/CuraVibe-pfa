<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){

        $user = user::all();
        return view('admin.users.index')->with('users',$user);
    }

}
