<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Traitment;
use App\Models\Historique;
use App\Models\Prise_horaire;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Traitement***************************************************


    public function addnewtraitment(Request $request)
    { 
      $request->validate(
        ['medicament'=>'required',
        'periode_traitment'=>'required',
        'start_date'=>'required',
        'end_date'=>'required',
        'heures'=>'required',
       
        ]
      );
      $user = Auth::user();
      $traitment = $user->traitements()->create($request->all());

      
          

               foreach ($request->heures as $heure) {
                  $traitment->prisesHoraires()->create([
                      'heure_prise' => $heure,
                     ]);
                  }
          
                  $this->storeHistorique($traitment->id);
               return redirect()->route('/Userspace/ongoing')
               ->with('success', 'Traitment created successfully.');
    
 
   }


   public function newtraitment()
   {
      return view('Userspace.newtraitment');
   }

   public function ongoing()
   {
      $user = Auth::user();

      // Récupérer les traitements en cours de l'utilisateur connecté
      $traitementsEnCours = $user->traitements()->where('is_current', true)->get();
  
      // Passer les traitements en cours à la vue
      return view('Userspace.ongoing', ['traitements' => $traitementsEnCours]);
   
   }

//historique**************************************
  

    public function storeHistorique($traitmentId)
{
    // Récupérer l'utilisateur connecté
    $user = Auth::user();

    // Créer un nouvel historique de traitement
    $historique = new Historique();
    $historique->user_id = $user->id;
    $historique->traitment_id = $traitmentId;
    $historique->date_prise = now(); // Date de prise actuelle
    // Ajoutez d'autres attributs d'historique si nécessaire
    $historique->save();
}


public function history()
{
    // Récupérer l'utilisateur connecté
    $user = Auth::user();

    // Récupérer l'historique des traitements de l'utilisateur
    $historiqueTraitements = $user-> historiques()->get();

    // Passer l'historique des traitements à la vue
    return view('Userspace.history', ['historique' => $historiqueTraitements]);
}
//Prfile*****************************************
    public function profile()
    {
       return view('Userspace.profile');
    }
    
public function update(Request $request)
{
    // Valider les données du formulaire
    $request->validate([
       
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
       
    ]);

    // Récupérer l'utilisateur authentifié
    $user = auth()->user();

    // Mettre à jour les informations du profil
    $user->update([
        'username' => $request->input('username'),
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'dob' => $request->input('dob'),
        'address' => $request->input('address'),
        'phone' => $request->input('phone'),
      ]);
     



        if ($request->hasFile('image')) {
         // Supprimer l'ancienne image de profil si elle existe
         if ($user->image) {
             Storage::delete($user->image);
         }
         // Télécharger la nouvelle image de profil
         $imagePath = $request->file('image')->store('images');
         $user->image = $imagePath;
        
        $user->save();
      }
    // Rediriger l'utilisateur vers la page de profil ou une autre page appropriée
    return redirect()->back()->with('success', 'Profile updated successfully.');
}
  
    //Auth*******************************
    public function register()
    {
       return view('auth.register');
    }
}
