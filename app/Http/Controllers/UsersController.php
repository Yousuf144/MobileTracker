<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $data['package'] =  DB::table('pacakege')->select('*')->get();

        return view('index')->with('data',$data);
    }

    public function dashboard(){
         return view('layout.index');
    }

    public function add_usesr(){

        return view('users.create');
    }
    public function view_user(){

        return view('users.view');
    }

    public function user_login(){
        $rec = request()->all();

        $id =  DB::table('users')->select('*')->where('email',$rec['email'])->first();
       if(!empty($id)){
        if(password_verify($rec['password'],$id->pasword)== true && $rec['email']==$id->email){
            return response()->json([
                'Status'=> 'Login Successfully',
                'Data'=> $id
            ]);
        }else{
            return response()->json([
                'Status'=> "Invalid Credentials",
                'Data'=> $id
            ]);
        }
       }else{
        return response()->json([
            'Status'=> "Invalid Credentials",
            'Data'=> $id
        ]);
    }
        
      
    }
}
