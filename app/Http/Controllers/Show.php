<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\comp;

class Show extends Controller
{
    //
    public function insert(Request $req)
    {
        $a= new comp;
        $a->name=$req->name;
        $a->email=$req->email;
        $a->phone=$req->phone;
        $a->gender=$req->Radios;
        $a->country=$req->country;
        $string=implode(",",$req->hobbies);
        $a->hobbies=$string;
        $a->address=$req->address;
        $a->save(); 
        return redirect('show');

    }

    public function show()
    {
        $result=comp::all();
        return view('show',compact('result'));

    }
     public function edit($id)
     {
        $student=comp::find($id);
        return view('edit',compact('student')); 

     }



     public function update(Request $req,$id)
     {
        $a=comp::find($id);
        $a->name =$req->name;
        $a->email =$req->email;
        $a->phone =$req->phone;
        $a->gender =$req->Radios;
        $a->country=$req->country;
        $string=implode(",",$req->hobbies);
        $a->hobbies=$string;
        $a->address=$req->address;
        
        $a->save();
        return redirect('show');



     }





     public function delete($id)
     {
        $student=comp::find($id);
        $student->delete();
        return redirect('show');

     }
}
