<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index(){
        $formation=Formation::all();
        return view('liste_formation',['form'=>$formation]);
    }
}
