<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\szakdoga;



class szakdogaController extends Controller
{
    public function index(){
        $szakdogak = response()->json(Szakdoga::all());
        return $szakdogak;
    }
    public function index2(Request $keres){
        $ujszakdoga = new Szakdoga();
        $ujszakdoga->szakdoga_nev = $keres->szakdoga_nev;
        $ujszakdoga->githublink = $keres->githublink;
        $ujszakdoga->oldallink = $keres->oldallink;
        $ujszakdoga->tagokneve = $keres->tagokneve;
        $ujszakdoga->save();
        
    }
    public function index4($id){
        console.log($id);
        $szakdoga = Szakdoga::where("id",$id)->get();
        $szakdoga->delete();
    }

    public function index3($id){
        $bejegyzes = response()->json(Szakdoga::where("id", $id)->get());
        return $bejegyzes;
    }
}
