<?php

namespace App\Http\Controllers;

use App\User;

class Signup extends Controller
{
    //
    public function __construct(){
    $this->middleware('auth');
  }
     public function index(){
    $users= User::where('id',auth()->id())->get();
    

    return view('index',compact('users'));
}
          public function create(){
   

    return view('signup');
}



 public function login(){
   

    return view('login');

}

 /*public function store(){
   
		
request()->validate([
'firstname' => 'required',
'lastname' => 'required',
'email' => 'required',
'number' => ['required','min:10'],
'address' => 'required',
'username' => 'required',
'password' => 'required'

]);

    
Information::create(request(['firstname','lastname','email','number','address','username','password']));



   
    	return redirect('login');

}*/

public function edit(User $users){


    return view('edit',compact('user'));
}/*
public function update(Information $information){

            $information->update(request(['firstname','lastname','email','number','address','username']));
           
             

               
return redirect('/information');

}
*/
public function show(User $users){
     
     return view('show',compact('users'));
}
/*
public function destroy($id){

    Information::find($id)->delete();
    return redirect('/information');
}*/
}

