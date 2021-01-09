<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function show($slug)
    {
        $characters = config('futurama-database');

        $charactersFiltered = [];

        foreach($characters as $item){
           if($item['slug'] == $slug){
               $charactersFiltered = $item;
               break;
           }
        }
        // dd($charactersFiltered);
        return view('character-detail' , compact('charactersFiltered'));
    }
}
