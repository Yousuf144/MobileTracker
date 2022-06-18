<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackegesController extends Controller
{
   public function index(){
     return view('packeges.index');
   }

   public function create(){
    return view('packeges.create');
   }
}
