<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
class PackegesController extends Controller
{
   public function index(){
     return view('packeges.index');
   }

   public function create(){
    return view('packeges.create');
   }
   public function store(){
    $rec = request()->only('package_name','price','pacakge_detail','allowed_user');
    $id =  DB::table('pacakege')->select('*')->where('package_name',$rec['package_name'])->get();
    if(count($id) == 0){
     $add=  DB::table('pacakege')->insert($rec);
      Toastr::success('Post added successfully :)','Success');
    }else{
      Toastr::Success('Already Exits :)','Success');
    }
return redirect()->route('admin.packeges.add');
   }
}
