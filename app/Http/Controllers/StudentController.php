<?php

namespace App\Http\Controllers;

use App\Imports\StudentImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function index(){
        return view('student');
    }

    public function upload(Request $request)
    {
        
        Excel::import(new StudentImport,$request->file('excel_file'));
        
        return redirect('/student/')->with('message', 'Imported Successfully');
    }
}
