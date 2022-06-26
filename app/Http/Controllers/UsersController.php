<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $data['package'] =  DB::table('pacakege')->select('*')->get();

        return view('index')->with('data',$data);
    }

    public function create_user(){

        return view('register');
    }
    public function store_user_account(){
        $rec = request()->only('first_name','last_name','email','pasword','number');
        $rec['packege_id'] = 8; 
        $rec['pasword'] = Hash::make($rec['pasword']);
        $id =  DB::table('users')->select('*')->where('email',$rec['email'])->get();
        if(count($id) == 0){
         $add=  DB::table('users')->insert($rec);
          Toastr::success('User Register successfully','Success');
        return redirect()->route('user.login');

        }else{
          Toastr::Error('Email Already Exits ','Error');
        return redirect()->route('user.create');

        }
       }
    public function login_user(){

        return view('login');
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
