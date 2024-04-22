<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){

        $user = user::all();
        return view('admin.users.index')->with('user',$user);
    }

    public  function destroy($id)
    {
        $user = User::find($id);
        if ($user->delete()) {
            return back()->with('success', 'l utilisateur a été supprimé!');
        } else {
            return back()->with('error', 'Une erreur est survenue!');
        }
    }
}
