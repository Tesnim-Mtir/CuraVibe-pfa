<?php

namespace App\Http\Controllers;
use App\Models\Commentaire;
use App\Models\User;
use App\Models\Recycle;
use App\Models\Don;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
            $comments = Commentaire::all();
            return view('welcome', ['comments' => $comments]);
        }
    
    
}

