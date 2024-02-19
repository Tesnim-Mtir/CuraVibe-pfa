<?php

namespace App\Http\Controllers;
use App\Models\ChartData;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function chatsPage()
    {
        $chartData = chartdata::select('id', 'quantite')->get();
        // [['quantite' => 10, 'nom' => 'Catégorie A'],['quantite' => 20, 'nom' => 'Catégorie B'],['quantite' => 15, 'nom' => 'Catégorie C'],];
        return view ('charts\chats_page', ['chartData' => $chartData]);
    }
}
