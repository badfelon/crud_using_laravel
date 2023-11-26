<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{


  public  function upload(Request $request){
        echo $request->file('image')->store('uploads');
    }
}
