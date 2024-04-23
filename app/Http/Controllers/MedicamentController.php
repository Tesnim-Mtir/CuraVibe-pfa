<?php

namespace App\Http\Controllers;

use App\Models\Medicament;
use Illuminate\Http\Request;

class MedicamentController extends Controller
{
    //
    public function index()
    {

        $medicament = Medicament::paginate(50);
        return view('admin.medicaments.index')->with('medicament', $medicament);
    }

    public function store(Request $request)
    {   // Validation des champs du formulaire
        $this->validate($request, [
            "Nom" => "required",
            "Dosage" => "required",
            "Forme" => "required",
            "Présentation" => "required",
            "DCI" => "required",
            "Classe" => "required",
            "Sous_Classe" => "nullable",
            "Laboratoire" => "required",
            "AMM" => "nullable",
            "Date_AMM" => "nullable",
            //"Conditionnement_Primaire" => "required",
            "tableau" => "required",
            //"Durée_de_Conservation" => "required",
            "Indications" => "required",
            "G_P_B" => "required",
            "VEIC" => "required"
        ]);

        $medicament = new Medicament();
        $medicament->Nom = $request->Nom;
        $medicament->Dosage = $request->Dosage;
        $medicament->Forme = $request->Forme;
        $medicament->Présentation = $request->Présentation;
        $medicament->DCI = $request->DCI;
        $medicament->Classe = $request->Classe;
        $medicament->Sous_Classe = $request->Sous_Classe;
        $medicament->Laboratoire = $request->Laboratoire;
        $medicament->AMM = $request->AMM;
        $medicament->Date_AMM = $request->Date_AMM;
        $medicament->Conditionnement_Primaire = $request->Conditionnement_Primaire;
        $medicament->Spécifocation_Conditionnement_Primaire = $request->Spécifocation_Conditionnement_Primaire;
        $medicament->tableau = $request->tableau;
        $medicament->Durée_de_Conservation = $request->Durée_de_Conservation;
        $medicament->Indications = $request->Indications;
        $medicament->G_P_B = $request->G_P_B;
        $medicament->VEIC = $request->VEIC;

        $medicament->save();
        return back()->with('success', 'medicament ajouté avec succées !');
    }

    public function edit($id)
    {
        $medicament = Medicament::findOrFail($id);
        return view('admin.medicaments.edit', compact('medicament'));
    }


    public  function destroy($id)
    {
        $medicament = Medicament::find($id);
        if ($medicament->delete()) {
            return back()->with('success', 'le medicament a été supprimé!');
        } else {
            return back()->with('error', 'Une erreur est survenue!');
        }
    }

    public function update(Request $request)
    {

        // Validation des champs du formulaire
        $this->validate($request, [
            "Nom" => "required",
            "Dosage" => "required",
            "Forme" => "required",
            "Présentation" => "required",
           "DCI" => "required",
            "Classe" => "required",
            "Sous_Classe" => "nullable",
            "Laboratoire" => "required",
            "AMM" => "nullable",
            "Date_AMM" => "nullable",
          "Conditionnement_Primaire" => "required",
            "tableau" => "required",
           "Durée_de_Conservation" => "required",   
            "Indications" => "required",
            "G_P_B" => "required",
            "VEIC" => "required"
        ]);
        $id = $request->id_medicament;

        // Find the medicament instance
        $medicament = Medicament::find($id);

        // Update the attributes
        $medicament->Nom = $request->Nom;
        $medicament->Dosage = $request->Dosage;
        $medicament->Forme = $request->Forme;
        $medicament->Présentation = $request->Présentation;
        $medicament->DCI = $request->DCI;
        $medicament->Classe = $request->Classe;
        $medicament->Sous_Classe = $request->Sous_Classe;
        $medicament->Laboratoire = $request->Laboratoire;
        $medicament->AMM = $request->AMM;
        $medicament->Date_AMM = $request->Date_AMM;
        $medicament->Conditionnement_Primaire = $request->Conditionnement_Primaire;
        $medicament->Spécifocation_Conditionnement_Primaire = $request->Spécifocation_Conditionnement_Primaire;
        $medicament->tableau = $request->tableau;
        $medicament->Durée_de_Conservation = $request->Durée_de_Conservation;
        $medicament->Indications = $request->Indications;
        $medicament->G_P_B = $request->G_P_B;
        $medicament->VEIC = $request->VEIC;

        
        // Save the changes
        if ($medicament->save()) {
            return back()->with('success', 'le medicament a été modifié!');
        } else {
            return back()->with('error', 'Une erreur est survenue!');
        }
    }
}