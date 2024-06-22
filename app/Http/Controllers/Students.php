<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Student;
use Illuminate\Support\Facades\Hash;

use Validator;

class Students extends Controller
{
    public function index(){
        return view('my_view');
    }

    public function insert(Request $req){

        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            // 'quantity' => 'required|numeric',
            // 'slug' => 'required',
            // 'category_id'=>'required',
            // 'brand_id'=>'required'
        ]);

       $data = new Student;
       $data->name = $req->name;
       $data->email = $req->email;
       $data->password =Hash::make($req->password);    
       $data->save();

       return redirect('/myview');
    }

    public function show(){
      
        $data = Student::orderBy('id','asc')->get();
        return view('home')->with('data',$data);

    }
}
