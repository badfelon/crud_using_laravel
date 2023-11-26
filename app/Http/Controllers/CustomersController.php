<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title="Registration";
        $url=url('/customers/');
        $data=compact('url','title');
        return view('customers');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required'
        ]);
        // echo"<pre>";
        // print_r($request->all());

        $customers = new Customers;
        $customers->name=$request['name'];
        $customers->email=$request['email'];
        $customers->address=$request['address'];
        $customers->password=md5($request['password']);
        $customers->save();

        return redirect('customers/view');
    }

    /**
     * Display the specified resource.
     */
    public function view()
    {
       
        $customers = Customers::all();
        // $customers->name=$request[ 'name'];
        // $customers->email=$request[ 'email'];
        // $customers->address=$request[ 'address'];
        $data=compact('customers');
        return view('customers-view')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $customers=Customers::find($id);
        if(is_null($customers)){
            //not found
        }else{
            $title="Update Customer";
            $url=url('/customers/update'). '/' .$id;
            $data=compact('customers','url','title');
            return view('customers')->with ($data);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $customers=Customers::find($id);
        $customers->name=$request['name'];
        $customers->email=$request['email'];
        $customers->address=$request['address'];
        $customers->save();
        return redirect('/customers/view');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        Customers::find($id)->delete();
       return redirect() -> back();

    }
}
