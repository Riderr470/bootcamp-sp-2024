<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Personal;


class TestController extends Controller
{
    public function createForm(){
        return view('backend.pages.personal');
        
    }

    public function viewForm(){
        
        $personal = Personal::all();
                
        return view('backend.pages.personalView', compact('personal'));
    }

    public function storeForm(Request $request){

        
        Personal::create([
            'name' => $request->name,
            'fatherName' => $request->fatherName,            
            'motherName' => $request->motherName,
            'age' => $request->age,
            'address' => $request->address,
        ]);
        
        
        return redirect()->route('personal.view');
    }
}
