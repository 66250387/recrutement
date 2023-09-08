<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\entreprise;
use App\Models\etudiant;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class EntrepriseController extends Controller
{

    public function index(){
        $entreprises = entreprise::all();
        return view('admin.entreprise',compact('entreprises'));
    }

    public function entrepriseIndex(){
        return view('entreprise.index');
    }

    
    public function etudiantIndex(){
        $Etudiants= etudiant::all();
        return view('entreprise.etudiant',compact('Etudiants'));
    }

 
}