<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades;
use Illuminate\Http\Request;
use App\Models\User;

class UserAdminController extends Controller
{

    public function index(){
        $users=User::where('role','user')->get();
        return view('admin.users.index')->with('users',$users);
        }
    /*public function index(){

        $users = User::all();
        return view('admin.users.index')->with('users',$users);
    }
*/
    public  function destroy($id)
    {
        $users = User::find($id);
        if ($users->delete()) {
            return back()->with('success', 'l utilisateur a été supprimé!');
        } else {
            return back()->with('error', 'Une erreur est survenue!');
        }
    }
}
