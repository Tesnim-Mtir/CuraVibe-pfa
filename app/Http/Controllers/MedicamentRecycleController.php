<?php

namespace App\Http\Controllers;

use App\Models\MedicamentRecycle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedicamentRecycleController extends Controller
{
    public function index(){
        $medicaments = MedicamentRecycle::all();
            return view('recycle.adminrecycle',['medicaments'=> $medicaments]);
    }
    
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'etat' => 'required',
            'quantite' => 'required',
        ]);
        
        $medicamentrecycle = new MedicamentRecycle();
        $medicamentrecycle->name = $request->name;
        $medicamentrecycle->etat = $request->etat;
        $medicamentrecycle->quantite = $request->quantite;
        $medicamentrecycle->save();

        return redirect()->route('Show-medicament')->with('success','Ajout avec succées');
    }
    public function deleteMedicament($id)
    {
        // Rechercher l'éducatrice par son ID
        $medicament = MedicamentRecycle::find($id);
   
        // Vérifier si l'éducatrice existe
        if (!$medicament) {
            return response()->json(['message' => 'Teacher not found.'], 404);
        }
   
        // Supprimer l'éducatrice
        $medicament->delete();
   
        // Retourner une réponse réussie
        return redirect()->route('Show-medicament')->with('success','Ajout avec succées');
    }
    public function updateMedicament(Request $request, $id)
    {
        try {
            // Récupérer le médicament depuis la base de données
            $medicament = MedicamentRecycle::findOrFail($id);
    
            // Valider les données reçues du formulaire
            $validatedData = $request->validate([
                'name' => 'required',
                'etat' => 'required',
                'quantite' => 'required|integer',
            ]);
    
            // Mettre à jour les données du médicament avec les données du formulaire
            $medicament->name = $request->name;
            $medicament->etat = $request->etat;
            $medicament->quantite = $request->quantite;
            $medicament->save();
    
            // Retourner une réponse de succès
            return redirect()->route('Show-medicament')->with('success', 'Le médicament a été mis à jour avec succès.');
        } catch (\Exception $e) {
            // En cas d'erreur, retourner une réponse d'erreur
            return back()->with('error', 'Une erreur s\'est produite lors de la mise à jour du médicament. Veuillez réessayer ultérieurement.');
        }
    }
    
public function editMedicament($id){
    $medicament = MedicamentRecycle::findOrFail($id);
    return view('recycle.edit')->with('medicament', $medicament);
}
public function ShowEdit(){

    return view('recycle.edit');
}
public function getFormAdd()
{
    return view('recycle.index');
}

}
