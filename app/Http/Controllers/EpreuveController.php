<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Epreuve;


class EpreuveController extends Controller
{
    public function index (){
        /* $epreuves =Epreuve::all(); 
        return view ('list_ep', compact('epreuves'));*/

        //***************************Q6-a*************************/
        //Afficher le libellé de la matière de l’épreuve numéro 5.
        $result1=DB::table('epreuves')
        ->select('libelle')
        ->join('matieres', function($join)
        {
            $join->on('matieres.id', '=', 'epreuves.matiere_id')
                 ->where('epreuves.matiere_id', '=', 5);
        })
        ->get();
        //return ($result1);
        //***************************Q6-b*************************/
        //Afficher les épreuves de la matière dont le code est ‘algo’.
        $result2=DB::table('epreuves')
        ->join('matieres', function($join)
        {
            $join->on('matieres.id', '=', 'epreuves.matiere_id')
                 ->where('matieres.codemat', '=', 'algo');
        })
        ->get();
         return ($result2);
    }
    public function create(){
        return view ("ajouter_ep");
    }
    public function store(Request $request){
        $epreuve=new Epreuve;
        $epreuve->datepreuve=$request->date;
        $epreuve->lieu=$request->lieu;
        $epreuve->numepreuve=$request->code;
        $epreuve->matiere_id=$request->matiere_id;
        $epreuve->save();
        
        return redirect('/list_ep');

    }}
