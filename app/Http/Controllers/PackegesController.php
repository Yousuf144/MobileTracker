<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
class PackegesController extends Controller
{
   public function index(){
    $data =  DB::table('pacakege')->select('*')->get();
     return view('packeges.index')->with('data',$data);
   }

   public function create(){
    return view('packeges.create');
   }


   public function store(){
    $rec = request()->only('package_name','price','pacakge_detail','allowed_user');
    $id =  DB::table('pacakege')->select('*')->where('package_name',$rec['package_name'])->get();
    if(count($id) == 0){
     $add=  DB::table('pacakege')->insert($rec);
      Toastr::success('Pacakge added successfully','Success');
    }else{
      Toastr::Error('Already Exits ','Error');
    }
    return redirect()->route('admin.packeges.view');
   }

   public function delete(){
    $id =request()->only('id');
    $status = DB::table('pacakege')->where('id', $id['id'])->delete();
    if($status == 1){
      Toastr::success('Data Delete successfully','Success');
      return "true";
    }else{
      Toastr::Error('Some Error Occurred','Error');
      return "false";
    }
   }


   public function edit(){
    $rec = request()->only('id');
    $data =  DB::table('pacakege')->select('*')->where('id',$rec['id'])->get();
     return view('packeges.edit')->with('data',$data[0]);
   }

   public function update(){
    $rec = request()->only('package_name','price','pacakge_detail','allowed_user');
    $id = request()->only('id');
    $data = DB::table('pacakege')->where('id',$id['id'])->update($rec); 
    if($data == 1){
      Toastr::success('Data Updated successfully','Success');
    return redirect()->route('admin.packeges.view');
    }
   }
}
