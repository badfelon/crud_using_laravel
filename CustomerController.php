<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $url=url('/customer');
        $title="Registration";
        $data=compact('url','title');
        return view('customer')->with($data);
    }

    public function store(Request $request)
    {

        $request ->validate(
            [
                
                'name'=> 'required',
                'email'=> 'required|email',
                'password'=> 'required'
            ]
            );
        echo "<pre>";
        print_r($request ->all());

        $customer = new Customer;
        $customer -> name=$request['name'];
        $customer -> email=$request['email'];
        $customer -> password=md5($request['password']);
        $customer -> country=$request['country'];
        $customer -> address=$request['address'];
        $customer -> save();

        return redirect('/customer/view');

    }

    public function view(){

        $customers =  Customer::all();
        // echo"<pre>";
        // print_r($customers->toArray());
        // echo"</pre>";
        // die;
        $data=compact('customers');
        return view('customer-view')->with($data);
    }

    public function view1(){
        return view('index');
    }

    public function delete($id)
    {
        Customer::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        
       $customer= Customer::find($id);
        if(is_null($customer)){
            //not found
            return redirect('customer');
        }
        else
        {
            $url= url('/customer/update')."/".$id;
            //found 
            $title="Update";
            $data=compact('customer','url','title');
            return view('customer')->with($data);
        }
    }

    public function update($id,Request  $request )
    {
       $customer= Customer::find($id);
        $customer -> name=$request['name'];
        $customer -> email=$request['email'];
        $customer -> country=$request['country'];
        $customer -> address=$request['address'];
        $customer -> save();

        return redirect('customer/view');
    }
}
