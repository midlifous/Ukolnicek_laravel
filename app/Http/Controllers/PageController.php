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
    

        public function pridatUkol(Request $request)
    {
        try
        {
        $validovano = $request->validate([
            'ukol-name'=>'required|unique:ukoly,nazev|min:3',
           
          

        ]);
       
        Ukoly::insert([
            "nazev"=> $validovano["ukol-name"],
        ]);

        return back()->with("message", "vytvořil jsi " . $validovano["ukol-name"]. "." );
        }
        catch(Exception $e){
            return back()->with("message","chyba :" . $e->getMessage());
        }
    }

    public function smazaniUkolu(int $id)
    {
        $ukol = Ukoly::find($id);
        if(null == $ukol){
            return back()->with("message","Tento úkol neexistuje");
        }else{
           
             $ukol->delete();
            return back()->with("message","úkol byl smazán");
        }
    }
    
}
