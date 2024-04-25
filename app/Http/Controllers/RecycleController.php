<?php

namespace App\Http\Controllers;
use App\Models\Recycle;
use Illuminate\Http\Request;

use App\Models\Don;

class RecycleController extends Controller
{
    public function index()
    {
        $recycles = Recycle::all();

        $labels = $recycles->pluck('id')->toArray();
        $data = $recycles->pluck('quantite')->toArray();

        return view('charts.Graphique', compact('labels', 'data'));
    }
    public function getData()
    {
        $doneCount = Don::count();
        $recycleCount = Recycle::count();

        return response()->json([
            'done' => $doneCount,
            'recycle' => $recycleCount,
        ]);
    }
  
  
}
