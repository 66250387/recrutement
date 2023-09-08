<?php

namespace App\Http\Controllers;

use App\Models\Diplome;
use App\Models\Entreprise;
use App\Models\Etudiant;
use App\Models\Filiere;
use App\Models\User;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('message', 'You have successfully logged out.');
    }


    public function login(){
        return view('connecter');
    }

    public function loginstore(Request $request){
       
       
            $fields = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required']
            ]);
            //il faut verifier le role de qui est ce qui veut se connecter
            $request->session()->regenerate();
            if(auth()->attempt($fields) && Auth::user()->role_id ===1){
                return redirect('admin')->with('message', 'You have successfully logged in.');
            }

            if(auth()->attempt($fields) && Auth::user()->role_id ===2){
                return redirect('gestionentreprise')->with('message', 'You have successfully logged in.');
            }

            if(auth()->attempt($fields) && Auth::user()->role_id ===3){
                return redirect('acceuil')->with('message', 'You have successfully logged in.');
            }
    
            return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
     
    }
    public function create(){
        $filieres = Filiere::all();
        $diplomes = Diplome::all();
        return view('inscription',compact('filieres','diplomes'));
    
       }
           
       public function store(Request $request){
       

           $test = $request->validate([
            'nom' => "required|string|max:100",
            'prenom' => "required|string|max:100",
            'email' => 'required', 'email',
            'password' => ['required', 'confirmed', 'min:6'],
            'password_confirmation' =>'required'
            ]);

            $etudiant = User::create([
                'nom' =>$request->nom,
                'prenom' =>$request->prenom,
                'email' =>$request->email,
                'password'=> Hash::make($request->password),
                'role_id' => 3
            ]);
        

            Etudiant::create([
                'filiere_id'=> $request->filiere,
                'diplome_id'=> $request->diplome,
                'user_id' => $etudiant->id
            ]);

            return redirect('/')->with('message', 'You have successfully logged out.');
       
    }

    // public function edit(User $user){
    //     return view('edit', ['user' => $user]);
    // }
        
    public function prise(){
        $domaine = Entreprise::all();
        return view('formentreprise', compact('domaine'));
    }

    
       
       public function entreprisestore(Request $request){
       

        $mom = $request->validate([
         'nom' => "required|string|max:100",
         'domaine' => "nullable|string|max:100",
         'siteweb' => "required|string|max:100",
         'description' => "required|string|max:100", 
         'password' => ['required', 'confirmed', 'min:6'],
         'password_confirmation' =>'required'
         ]);

         $entreprise = User::create([
             'nom' =>$request->nom,
             'email' =>$request->email,
             'password'=> Hash::make($request->password),
             'role_id' => 2
         ]);


         Entreprise::create([
            'ville' => $request->ville,
            'siteweb' => $request->siteweb,
            'domaine' => $request->domaine,
            'description' => $request->description,
            'user_id' => $entreprise->id
          ]);

        return redirect('/')->with('message', 'You have successfully logged out.');
   
         }

         public function pageacceuil(){
            return view('acceuil');
        }
}