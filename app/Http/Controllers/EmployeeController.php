<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Employee;



class EmployeeController extends Controller
{
    //
    public function index1(){
        return view('list');
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
     $validator= Validator::make($request->all(),[
        'name' => 'required',
        'email' => 'required',
        'image' => 'sometimes|image:jpg,png,gif,jpeg'
     ]);
     
     if($validator->passes()){
        //save data here
        $employee = new Employee();
        $employee->name= $request->name;
        $employee->email= $request->email;
        $employee->address= $request->address;
        $employee->save();
        return redirect()->route('employees.index1');
     }
     else{
        //return with error

        return redirect()->route('employees.create')->withErrors($validator)->withInput();
     }

    }
}
