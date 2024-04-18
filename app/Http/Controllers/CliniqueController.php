<?php

namespace App\Http\Controllers;

use App\Models\Clinique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CliniqueController extends Controller
{
    public function index()
    {
        try {
            $cliniques = Clinique::all(); 
            return view('home.cabinet.cabinet', compact('cliniques'));
        } catch (\Exception $e) {
            dd($e->getMessage());
            
            
        }}

    // Function to get a pharmacy by its ID
    public function getPharmacyById($id)
    {
        // Retrieve the pharmacy with the given ID from the Clinique model
        $pharmacy = Clinique::find($id);

        // Return the pharmacy
        return $pharmacy;
    }
    // Function to handle search form submission
    public function search(Request $request)
    {
        $selectedRegion = $request->input('area');
        $selectedTime = $request->input('time');
    
        // Perform the search query to retrieve clinics based on selected criteria
        $cliniques = Clinique::where('region', $selectedRegion)
                             ->whereTime('open_time', '<=', $selectedTime)
                             ->whereTime('close_time', '>=', $selectedTime)
                             ->get();
    
        // Return the view with the search results
        return view('home.cabinet.cabinet', compact('cliniques', 'selectedRegion', 'selectedTime'));
    }
    
    

    
    
}

