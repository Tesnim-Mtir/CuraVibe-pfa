<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dones;
use Carbon\Carbon;

use App\Models\Recycle;
use Illuminate\Support\Facades\DB; // Import the DB facade

class ChartJSController extends Controller
{
    public function chartData()
    {
        $dones = Dones::select('id', 'quantite')->get();
        return response()->json($dones);
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
        $doneCount = Dones::count();
    
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
        $doneData = Dones::with('user', 'product')
                        ->whereBetween('created_at', [$startDate, $endDate])
                        ->select('id', 'user_id', 'product_id', 'created_at as date')
                        ->get();

        // Fetch recycle data
        $recycleData = Recycle::with('user', 'product')
                              ->whereBetween('created_at', [$startDate, $endDate])
                              ->select('id', 'user_id', 'product_id', 'created_at as date')
                              ->get();

        // Merge done and recycle data into a single collection
        $statistics = $doneData->merge($recycleData);

        // Add an "action" attribute to distinguish between donated and recycled products
        $statistics->transform(function ($item, $key) {
            $item['action'] = $item instanceof Dones ? 'Donation' : 'Recycle';
            return $item;
        });

        return response()->json(['statistics' => $statistics]);
    }
}