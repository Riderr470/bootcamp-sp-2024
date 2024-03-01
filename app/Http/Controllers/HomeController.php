<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class HomeController extends Controller
{
    public function user(){
        return view('backend.pages.dashboard');
    }

    public function order(){
        return view('backend.pages.orders');
    }

    public function admin(){
        return view('admin');
    }

    public function signUp(){
        return view('backend.pages.sign-in');
    }

    public function create(){
        return view('create');
    }

    public function storeStudent(Request $request){
        
        Student::create([
            'name' => $request->name,
            'student_id' => $request->student_id,            
            'date_of_birth' => $request->date_of_birth,
        ]);
        
        return redirect('/');
    }
}
