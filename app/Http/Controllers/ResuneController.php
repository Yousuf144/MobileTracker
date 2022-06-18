<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

class ResuneController extends Controller
{
    //

    function index(){

        return view('index');
    }

    function postLocation(){
        
  $data = request()->all();
    
    $obj =array(
        'accuracy'=> $data['accuracy'],
        'altitude'=> $data['altitude'],
        'bearing'=> $data['bearing'],
        'latitude'=> $data['latitude'],
        'longitude'=> $data['longitude'],
        'provider'=> $data['provider'],
        'speed'=> $data['speed'],
        'time'=> $data['time'],
    );
    
    $id =  DB::table('location')->insert($obj);


        return response()->json([
            'Status'=> $id,
            'Time'=>date('Y-m-d h:i:sa')
        ]);
    }

    function map(){

        return view('map');
    }

  
        
      

    function create(){

        return view('create');
    }
    function showAll(){
        $data =  DB::table('user_info')->select('*')->get();
        return view('view')->with('data',$data);
    }
    function edit(Request $request){
        $data =  DB::table('user_info')->select('*')->where('id',$request->id)->get();
        $data[0]->soft_skills = json_decode($data[0]->soft_skills);
        $data[0]->education = json_decode($data[0]->education);
        $data[0]->skill_heighlights = json_decode($data[0]->skill_heighlights);
        $data[0]->certificate = json_decode($data[0]->certificate);
        $data[0]->certifications_year = json_decode($data[0]->certifications_year);
        $data[0]->skill_hightlightsame_desc = json_decode($data[0]->skill_hightlightsame_desc);
        $data[0]->educations_year = json_decode($data[0]->educations_year);
        return view('edit')->with('data',$data[0]);
    }
    function store(Request $request){
        $dataa = array(
            'name' => $request->name,
            'email'=> $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'soft_skills' => json_encode($request->soft_skill),
            'refrence' => $request->references,
            'education' => json_encode($request->educations),
            'skill_heighlights' => json_encode($request->skill_hightlightsame_title),
            'certificate' => json_encode($request->certifications),
            'certifications_year' => json_encode($request->certifications_year),
            'skill_hightlightsame_desc' => json_encode($request->skill_hightlightsame_desc),
            'educations_year' =>json_encode( $request->educations_year),
        );
    
      $id =  DB::table('user_info')->insert($dataa);
     
     

        return redirect('/view');

    }
    function show(Request $request){
      $data =  DB::table('user_info')->select('*')->where('id',$request->id)->get();
      $data[0]->soft_skills = json_decode($data[0]->soft_skills);
      $data[0]->education = json_decode($data[0]->education);
      $data[0]->skill_heighlights = json_decode($data[0]->skill_heighlights);
      $data[0]->certificate = json_decode($data[0]->certificate);
      $data[0]->certifications_year = json_decode($data[0]->certifications_year);
      $data[0]->skill_hightlightsame_desc = json_decode($data[0]->skill_hightlightsame_desc);
      $data[0]->educations_year = json_decode($data[0]->educations_year);
      
        $aa = ['data' =>$data[0]];
        $pdf = PDF::loadView('show', $aa);
        
        return $pdf->download('invoice.pdf');
        // return view('show')->with('data',$data[0]);
    }

    function Delete(Request $request){
        DB::table('user_info')->where('id', $request->id)->delete();
        return true;
    }
    function Update(Request $request){
        $dataa = array(
            'name' => $request->name,
            'email'=> $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'soft_skills' => json_encode($request->soft_skill),
            'refrence' => $request->references,
            'education' => json_encode($request->educations),
            'skill_heighlights' => json_encode($request->skill_hightlightsame_title),
            'certificate' => json_encode($request->certifications),
            'certifications_year' => json_encode($request->certifications_year),
            'skill_hightlightsame_desc' => json_encode($request->skill_hightlightsame_desc),
            'educations_year' =>json_encode( $request->educations_year),
        );
        DB::table('user_info')->where('id', $request->id)->update($dataa);
        return redirect('/view');
    }



}
