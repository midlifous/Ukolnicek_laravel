<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ukoly;

class PageController extends Controller
{        
        public function index()
        {   
            $ukol = Ukoly::all();
            return view('welcome',['Ukoly' => $ukol]);
        }
    
       
    
}
