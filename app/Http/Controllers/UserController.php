<?php

namespace App\Http\Controllers;
use App\Models\Allergy_user;
use Illuminate\Support\Facades\Storage;
use App\Models\Traitment;
use App\Models\Historique;
use App\Models\Medicament;
use App\Models\User;
use App\Models\Allergie;
use App\Models\Stock;
use App\Models\Profile;

use App\Models\traitment_allergy;

use Illuminate\Support\Facades\Session;
use App\Models\Prise_horaire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Twilio\Rest\Client;

use Illuminate\Http\Request;

class UserController extends Controller
{

//SMS*******************

    public function sendsms()
    {

    $sid = getenv("TWILIO_SID");
    $token = getenv("TWILIO_TOKEN");
    $twilio = new Client($sid, $token);
    
    $message = $twilio->messages
                      ->create("+21699551882", 
                               [
                                   "body" => "C\'est le moment de prendre votre médicament !",
                                   "from" => "+13346038975"
                               ]
                      );
return back()->with('qucccess', 'Reminder mesage send with success');

}
    //Traitement***************************************************


    public function addnewtraitment(Request $request)
    { 
      $request->validate(
        ['medicament'=>'required',
        'periode_traitment'=>'required',
        'start_date'=>'required',
        'end_date'=>'required',
        'heure' => 'required|array',
        'heure.*' => 'required',
       
        ]
      );
      $user=Session::get('user');
      $traitment = new Traitment();
      $medicament = Medicament::where('name', $request->medicament)->first();
    
   // dd($medicament);
      
      $userAllergies = Session::get('user')->allergyUsers->pluck('allergy.name')->toArray();


    
     

      if (in_array( $medicament->DCI, $userAllergies)) {
      
    
        return back()->with('warning', 'Attention: Vous avez une allergie à ce médicament.');
    }

   else if ($medicament) {
      $traitment = $user->traitements()->create(
        [
           
            'medicament_id'=>$medicament->id,
            'periode_traitment'=>$request->periode_traitment,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
        ]);
       
      }
     // dd(  $traitment);
   // dd($request->heure);
if($traitment)
{
   
    foreach ($request->heure as $heure) {
        $priseHoraire = new Prise_horaire();
        $priseHoraire->heure = $heure;
        $priseHoraire->traitment_id = $traitment->id; 
        $priseHoraire->save();
    }
    
}

     $this->storeHistorique($traitment->id);
      return back()->with('success', 'Traitment created successfully.');
    

               
    
 
   }


   public function newtraitment()
   {
    $medicament=Medicament::all();
      return view('Userspace.newtraitment',['medicament'=>$medicament]);
   }




   public function ongoing()
   {
    $user=Session::get('user');

  
      $traitementsEnCours = $user->traitements()->where('is_current', true)->get();
      $prisesHoraires = [];

  
    foreach ($traitementsEnCours as $traitement) {
        $prisesHoraires[$traitement->id] = $traitement->prisesHoraires;
    }

 
    return view('Userspace.ongoing', ['traitements' => $traitementsEnCours, 'prisesHoraires' => $prisesHoraires]);
}


public function delete($id)
{
    $traitement = Traitment::findOrFail($id);
  
    $traitement->delete();
    
    return redirect()->back()->with('success', 'Traitement supprimé avec succès.');
}

//historique**************************************
  

    public function storeHistorique($traitmentId)
{
   
    $user=Session::get('user');

  
    $historique = new Historique();
    $historique->user_id = $user->id;
    $historique->traitment_id = $traitmentId;
    $historique->date_prise = now(); 
 
    $historique->save();
}


public function history()
{
    
    $user=Session::get('user');

  
    $historiqueTraitements = $user-> historiques()->get();


    return view('Userspace.history', ['historiques' => $historiqueTraitements]);
}


public function historydelete($id)
{
    $historique =Historique::findOrFail($id);
  
    $historique->delete();
    
    return redirect()->back()->with('success', 'historique supprimé avec succès.');
}

//allergy******************************************


public function showallergy()
{
    $user=Session::get('user');

  
    $allergies = Allergie::all();
    $allergies_user=$user->allergyUsers()->get();


    $allergys = [];
 
  
    foreach ($allergies_user as $al) {
      
        $allergy = $al->allergy;
 
        $allergys[] = $allergy->name;
    }

    return view('Userspace.allergies' ,['allergies' => $allergies,'allergys' => $allergys]);

}

public function addallergy(Request $request)
{
    $request->validate(
        ['name'=>'required',
        ]
      );
      $user=Session::get('user');
    
     
      $allery_user=new Allergy_user();
      $allergy = Allergie::where('name', $request->name)->first();
      if ($allergy) {
      
      
        $allergy_user = $user->allergyUsers()->create([
            'allergy_id' => $allergy->id,
        ]);
    
    
     return redirect()->back()->with('success', 'Allergy added successfully.');
    } 



}


//mypharmacie*******************************
public function mypharmacie()
{
    $medicament=Medicament::all();
    $stock=Stock::all();
      return view('Userspace.mypharmacie',['medicament'=>$medicament,'stock'=> $stock]);

}

public function addtomypharmacie(Request $request)

{
   //dd($request);
    $request->validate([
        'name_medicament' => 'required|string',
        'quantite' => 'required|integer|min:1',
    ]);

   
    Stock::create([
        'name_medicament' => $request->input('name_medicament'),
        'quantite' => $request->input('quantite'),
    ]);

    
    return redirect()->back()->with('success', 'Le médicament a été ajouté au stock avec succès.');

}


public function updatestock(Request $request, $id)
{
   
       
        $request->validate([
            'name_medicament' => 'required|string',
            'quantite' => 'required|integer|min:1',
        ]);

        $produit = Stock::findOrFail($id);

        $produit->update([
            'name_medicament' => $request->input('name_medicament'),
            'quantite' => $request->input('quantite'),
        ]);

      // $produit->name_medicament = $request->input('name_medicament');
       // $produit->quantite = $request->input('quantite');
       // $produit->update();

        return redirect()->back()->with('success', 'Le produit a été modifié avec succès.');
   
}

public function deletefrommypharmacie($id)
{
    $stock=Stock::findOrFail($id);
  
    $stock->delete();
    
    return redirect()->back()->with('success', 'produit stock supprimé avec succès.');
}





//Profile*****************************************


    public function profile()
    {$user=User::where('id',Session::get('user')->id)->get();

 
       return view('Userspace.profile',['user'=>$user]);
    }
    
    public function update(Request $request)
{
 
    $request->validate([
       
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
       
    ]);
//dd($request);
 
 
   $user=Session::get('user');

   if ($user->profile) {
   
    $user->profile->delete();

}
    $user-> profile()->update([
       
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'dob' => $request->input('dob'),
        'address' => $request->input('address'),
        'phone' => $request->input('phone'),
      ]);
     



       // if ($request->hasFile('image')) {
         // Supprimer l'ancienne image de profil si elle existe
       //  if ($user->image) {
          //   Storage::delete($user->image);
        // }
         // Télécharger la nouvelle image de profil
       //  $imagePath = $request->file('image')->store('images');
        // $user->image = $imagePath;
        
        //$user->save();
     // }
    // Rediriger l'utilisateur vers la page de profil ou une autre page appropriée
    return redirect()->back()->with('success', 'Profile updated successfully.');
}
  
    //Auth*******************************
    public function register()
    {
       return view('auth.register');
    }

    public function signup(Request $request)
{
    $user= new User();
    $user->name=$request->input('name');
    $user->email=$request->input('email');
    $user->phone=$request->input('phone');
    $user->password=$request->input('password');
 
    $user->save();
    Session::put('user',$user);
    return  back();;
}



public function signout()
{
    Session::forget('user');
    return redirect('/home');
}



public function login(Request $request)
{

    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);


    $user=User::where('email',$request->input('email'))->first();
   // dd($user);
if($user){
    if (Hash::check($request->input('password'), $user->password))
    
    {
        Session::put('user',$user);
        return redirect('/home');
    }else{
        return back()->with('status', 'Mot de passe incorrect');
    }
}else{
    return back()->with('status', "L'utilisateur avec cet e-mail n'existe pas");
}


}
}



