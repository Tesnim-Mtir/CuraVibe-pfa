<?php

namespace App\Http\Controllers;

use App\Models\Don; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class DonationController extends Controller
{
    public function index()
{
    try {
        $donations = Don::all(); 
        return view('home.don.don', compact('donations'));
    } catch (\Exception $e) {
        dd($e->getMessage());
        
        
    }}
 
    public function home()
    {
        try {
            $donations = Don::all(); // Fetch donations here
            return view('home.welcome', compact('donations'));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function show($id)
    {
        $donation = Don::find($id);
        return view('home.don.don_details', ['donation' => $donation]);
    }
     public function create()
    {
        return view('home.don.add'); 
    }
    public function store(Request $request)
    {
        // Validate the user input
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|max:2048', 
        ]);

        // Store the data in the database
        $donation = new Don();
        $donation->nom = $validatedData['nom'];
        $donation->description = $validatedData['description'];

        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->getClientOriginalName(); // Get the original file name
            $imagePath = $request->file('image')->storeAs('images', $imageName); // Store the image with the original file name
            $donation->image = $imageName; // Save only the file name in the database
        }

        $donation->save();

        // Redirect the user
        return redirect()->route('donation.create')->with('success', 'Donation added successfully!');
    }
}
