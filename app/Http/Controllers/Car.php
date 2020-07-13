<?php

namespace App\Http\Controllers;

use App\Cars;
use App\Mail\Carscreated;
use Illuminate\Http\Request;

class Car extends Controller
{
    //

public function __construct(){

}
      public function index(){

    $cars= Cars::where('owner_id',auth()->id())->get();


    

    return view('indexs',compact('cars'));
}


          public function create(){
   

    return view('create');
}




     public function store(Request $request)
    {
            $this->validate($request, [
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'carname'=> 'required',
           'model'=> 'required',
                  'color'=> 'required',
                  'description'=>'required'
    ]);

    $car = new Cars();

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name =rand() . '.' .$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $car->image = $name;
      }

      $car->carname= $request->get('carname');
      $car->model = $request->get('model');
    
      $car->color = $request->get('color');
      $car->description = $request->get('description');
  $car['owner_id']= auth()->id();
     $car->save();
     

          \Mail::to('versacenevein@gmail.com')->send(
                    new Carscreated($car)
                );
       /* Mail::to($cars->owner->email)->send(
                    new Carscreated($cars)
                ) */
        return redirect('/cars' );

    }
public function edit(Cars $car){
 abort_unless(\Gate::allows('update', $car),403);

    return view('caredit',compact('car'));
}
public function update(Request $request , Cars $car){
	   $this->validate($request, [

      'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'carname'=> 'required',
           'model'=> 'required',
                  'color'=> 'required',
                  'description'=>'required'
    ]);

   

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name =rand() . '.' .$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $car->image = $name;
      }

      $car->carname= $request->carname;
      $car->model = $request->model;
    
      $car->color = $request->color;
      $car->description = $request->description;
 
     
     $car->update();
     
   return redirect('/cars' );

}
public function show(Cars $car){

  abort_unless(\Gate::allows('update', $car),403);
     
     return view('carsshow',compact('car'));
}

public function destroy($id){

    Cars::find($id)->delete();
    return redirect('/cars');                              
}
public function shows(Cars $car){
  

      return view('cardetails',compact('car'));
}

}