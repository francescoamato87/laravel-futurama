<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller


{
    public function index() {

        $characters = config('futurama-database');
        // dd($characters);

        foreach($characters as $key => $item){
            $name = $item['first-name'] . ' ' . $item['last-name'];
            $slug = Str::slug($name, '-');


            $characters[$key]['slug']= $slug;
        }
        // dd($characters);
        return view ('home', compact('characters'));
    }
}
