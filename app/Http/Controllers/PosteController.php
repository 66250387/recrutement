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


public function modishow(poste $poste){

    return view('postemodifier', [
        'poste' => $poste
    ]);
}


public function modipostestore(Request $request){
 
    poste::create([
        'description'=>$request->description,
        'user_id'=>Auth::user()->id
    ]);

    return redirect('acceuil')->with('message', 'You have successfully logged in.');

}

public function edit(poste $poste){
    return view('edit', ['poste' => $poste]);
}

public function destroy(poste $poste){
    $poste->delete();
    return redirect('/')->with('message', 'Listing deleted successfully.');
}

public function liste(poste $poste){
    $postes = poste::all();
    return view('entreprise/listedesannonce',['poste' => $poste],compact('postes'));
}
}

