<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matiere;

class MatiereController extends Controller
{
    public function index (){
        $matieres =Matiere::all();
        return view ('list_lib', compact('matieres'));
    }
    public function create(){
        return view ("ajouter_lib");
    }
    public function store(Request $request){
        $matiere=new Matiere;
        $matiere->codemat=$request->code;
        $matiere->libelle=$request->libelle;
        $matiere->coef=$request->coefficient;
        $matiere->save();
        return redirect('/list_lib');

    }
}
