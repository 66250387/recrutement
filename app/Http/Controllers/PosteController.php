<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\poste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
class PosteController extends Controller
{
    public function show(poste $poste){

        return view('entreprise/poste', [
            'poste' => $poste
        ]);
}

public function postestore(Request $request){
 
    poste::create([
        'description'=>$request->description,
        'user_id'=>Auth::user()->id
    ]);

    return redirect('acceuil')->with('message', 'You have successfully logged in.');

  
}


}

