<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function index(){
      $url=url('/customer');
      $title="Create customer";
// Pass null if it's a create operation
$customer = null;


      $data=compact("url","title","customer");
       return view('customer')->with($data);
    }

    public function store(Request $request){
      //  echo"<pre>";
      //  print_r($request->all());

        // Using the display method
$customer = new Customer;

$customer->name=$request['name'];
$customer->email=$request['email'];
$customer->password=md5($request['password']);
$customer->state=$request['state'];
$customer->country=$request['country'];
$customer->address=$request['address'];
$customer->dob=$request['dob'];
$customer->gender=$request['gender'];
$customer->save();

return redirect('customer/view');

    }


  public function view(){
    $customers=Customer::all();
   // print_r($customers->toArray());
   $data=compact('customers');
   //echo"<pre>";
   //print_r($data);
   //echo"</pre>";
    return view('customer-view')->with($data);
  }


  public function delete($id){
   
   //echo"<pre>";
   //print_r($id);
   //echo"</pre>";

     $customer = Customer::find($id);
     // echo"<pre>";
   //print_r($customer);


     if(!is_null($customer)){
      $customer->delete();
     }
    
   //return redirect()->back();
   return redirect('customer/view');
  }
  
  public function edit($id){
    $customer = Customer::find($id);
    if(!is_null($customer)){
$url=url('customer/update')."/".$id;

$title="Update Cutomer";



     

      $data=compact('customer',"url","title");
      return view('customer')->with($data);

      //found
     }else{
      //not found 
      return redirect('customer/view');
     }
  }

  public function update($id, Request $request){
    $customer = Customer::find($id);
    if(!is_null($customer)){
     
      $customer->name=$request['name'];
      $customer->email=$request['email'];
      //$customer->password=md5($request['password']);
      $customer->state=$request['state'];
      $customer->country=$request['country'];
      $customer->address=$request['address'];
      $customer->dob=$request['dob'];
      $customer->gender=$request['gender'];
      $customer->save();
      return redirect('customer/view');
    }

  }

}
