<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Recycle;
use App\Models\Done;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        return view('Graphique', ['users' => $users]);
       
    } 
   
}

