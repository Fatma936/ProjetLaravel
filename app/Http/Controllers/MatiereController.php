<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Matiere;
use App\Models\Epreuve;

class MatiereController extends Controller
{
    public function index (){
       /* $matieres =Matiere::all();
        return view ('list_lib', compact('matieres'));*/

        //***************************Q6-a*************************/
        //Afficher le libellé de la matière de l’épreuve numéro 5.
        //methode de jointure:
        $result1=DB::table('epreuves')
        ->select('libelle')
        ->join('matieres', function($join)
        {
            $join->on('matieres.id', '=', 'epreuves.matiere_id')
                 ->where('epreuves.matiere_id', '=', 5);
        })
        ->get();
        //return ($result1);
        //2eme methode:
         
        $lib =Epreuve::find(7)->matiere->libelle;
        return($lib);

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
