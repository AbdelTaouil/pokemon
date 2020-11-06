<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    public function index(){
        $datas=Pokemon::all();
        return view('welcome', compact('datas'));
    }
    public function create(){
        return view('addpokemon');
    }
    public function store(Request $request){
        dd($request->nom,$request->type,$request->niveau);
    }
}
