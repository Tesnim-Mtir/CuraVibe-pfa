<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Don;
use Carbon\Carbon;

use App\Models\Recycle;
use Illuminate\Support\Facades\DB; // Import the DB facade

class ChartJSController extends Controller

{
    public function graphique(Request $request)
    {
        $year = $request->input('year', date('Y'));
        $orderCounts = Don::whereYear('created_at', $year)
            ->get()
            ->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('m');
            })
            ->map(function($month) {
                return $month->count();
            });

        $labels = [];
        $data = [];

        // Remplir les données et les étiquettes pour les mois
        for ($i = 1; $i <= 12; $i++) {
            $month = str_pad($i, 2, '0', STR_PAD_LEFT);
            $labels[] = Carbon::createFromFormat('!m', $month)->monthName;
            $data[] = $orderCounts->get($month, 0);
        }

        return response()->json([
            'labels' => $labels,
            'data' => $data,
        ]);
    }

public function yourControllerMethod ()
{
    return $this->donutChart();
  
}
public function donutChart()
    {
        // Obtenez le nombre total d'utilisateurs
        $totalUsers = User::count();
    
        // Obtenez le nombre d'actions de recyclage
        $recycleCount = Recycle::count();
    
        // Obtenez le nombre d'actions de don
        $doneCount = Don::count();
    
        // Vérifiez si le nombre total d'utilisateurs est différent de zéro pour éviter la division par zéro
        if ($totalUsers != 0) {
            // Calculez les pourcentages
            $recyclePercentage = ($recycleCount / $totalUsers) * 100;
            $donePercentage = ($doneCount / $totalUsers) * 100;
        } else {
            // Si le nombre total d'utilisateurs est zéro, définissez les pourcentages à zéro
            $recyclePercentage = 0;
            $donePercentage = 0;
        }
    
        // Retournez les pourcentages
        return response()->json([
            'recyclePercentage' => $recyclePercentage,
            'donePercentage' => $donePercentage
        ]);
    }
    public function fetchStatistics(Request $request)
    {
        // Determine the classification type
        $classification = $request->input('classification');

        // Get the start and end dates based on the classification
        $startDate = Carbon::now()->startOfWeek();
        $endDate = Carbon::now()->endOfWeek();
        if ($classification === 'month') {
            $startDate = Carbon::now()->startOfMonth();
            $endDate = Carbon::now()->endOfMonth();
        } elseif ($classification === 'year') {
            $startDate = Carbon::now()->startOfYear();
            $endDate = Carbon::now()->endOfYear();
        }

        // Fetch done data
        $doneData = Don::with('user', 'description')
                        ->whereBetween('created_at', [$startDate, $endDate])
                        ->select('id', 'user_id', 'description_id', 'created_at as date')
                        ->get();

                        
        // Fetch recycle data
        $recycleData = Recycle::with('user', 'description')
                              ->whereBetween('created_at', [$startDate, $endDate])
                              ->select('id', 'user_id', 'description_id', 'created_at as date')
                              ->get();

        // Merge done and recycle data into a single collection
        $statistics = $doneData->merge($recycleData);

        // Add an "action" attribute to distinguish between donated and recycled products
        $statistics->transform(function ($item, $key) {
            $item['action'] = $item instanceof Don ? 'Donation' : 'Recycle';
            return $item;
        });

        return response()->json(['statistics' => $statistics]);
    }
    public function showGraphiquePage()
{
    return view('charts.Graphique');
}
}