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
    public function history()
    {
        try {
            $donations = Don::all(); 
            return view('home.don.history', compact('donations'));
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
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'utilisateur' => 'nullable|string',
            'numero' => 'nullable|string',
            'etat' => 'nullable|string',
            'status' => 'nullable|string',
            'quantite' => 'nullable|string',
            'description' => 'required|string',
            'image' => 'required|image|max:2048', 
        ]);
    
        // Store the data in the database
        $donation = new Don();
        $donation->nom = $validatedData['nom'];
        $donation->utilisateur = $validatedData['utilisateur'] ?? null;
        $donation->numero = $validatedData['numero'] ?? null;
        $donation->etat = $validatedData['etat'] ?? null;
        $donation->status = $validatedData['status'] ?? null;
        $donation->quantite = $validatedData['quantite'] ?? null;
        $donation->description = $validatedData['description'];
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->getClientOriginalName(); // Get the original file name
            $imagePath = $request->file('image')->storeAs('images', $imageName); // Store the image with the original file name
            $donation->image = $imageName; // Save only the file name in the database
        }
    
        $donation->save();
    
        // Redirect the user
        return redirect()->route('don.index')->with('success', 'Donation added successfully!');
    }
    public function destroy($id)
{
    try {
        $donation = Don::findOrFail($id);
        $donation->delete();
        return redirect()->route('don.history')->with('success', 'Donation deleted successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Failed to delete donation: ' . $e->getMessage());
    }
}
public function updateStatus($id)
{
    try {
        $donation = Don::findOrFail($id);
        $donation->status = 'reserve'; 
        $donation->save();
        return response()->json(['success' => 'Status updated successfully!']);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Failed to update status: ' . $e->getMessage()], 500);
    }
}

}
