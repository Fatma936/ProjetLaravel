<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Epreuve;
use App\Models\Matiere;




class EpreuveController extends Controller
{
    public function index (){
        /* $epreuves =Epreuve::all(); 
        return view ('list_ep', compact('epreuves'));*/

        //***************************Q6-b*************************/
        //Afficher les épreuves de la matière dont le code est ‘algo’.
        //methode jointure:
        $result2=DB::table('epreuves')
        ->join('matieres', function($join)
        {
            $join->on('matieres.id', '=', 'epreuves.matiere_id')
                 ->where('matieres.codemat', '=', 'algo');
        })
        ->get();
         //return ($result2);
         //2eme methode:
         $ep = Matiere::where('codemat','algo')->first()->epreuves;
        return($ep);

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
