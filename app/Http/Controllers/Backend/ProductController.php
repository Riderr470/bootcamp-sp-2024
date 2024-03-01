<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showList(){
        return view('backend.pages.products.list');
    }

    public function create(){
        return view('backend.pages.products.create');
    }
}
