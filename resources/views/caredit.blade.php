@extends('layout')
   @section('content')
 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
  <style type="text/css">
    h1{
      font-family: 'Josefin Sans', sans-serif;
    }
    .content{
      font-family: 'Bebas Neue', cursive;
      font-size: 20px;
    }
    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
a{
  color: black;
}
/*-----Background-----*/
  
  </style>
  <div class="container-fluid h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col col-sm-8 col-md-8 col-lg-6 col-xl-5">
<form method="POST" action="/cars/{{$car->id}}" class="box" enctype="multipart/form-data">
                   @method('PATCH')

                    @csrf 

  

 <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">Car Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="car name" name="carname" value="{{$car->carname}}">
    </div>
    <div class="form-group col-md-4">
      <label for="model">Car Model</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="model" name="model" value="{{$car->model}}">
    </div>
     <div class="form-group col-md-4">
       <label for="inputAddress">Car Color</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="color" name="color" value="{{$car->color}}">
    </div>
  </div>
  <div class="form-group green-border-focus">
  <label for="exampleFormControlTextarea5">Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea5" rows="3" name="description" >{{$car->description}}</textarea>
</div>
   <div class="form-group">
    <label for="exampleFormControlFile1">Upload photo of your car</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  </div>
 
   <button type="submit" class="btn btn-primary">Update Car</button>

 @include('errors')
</form><br/>


 <form method="POST" action="/cars/{{$car->id}}">


                    @method('DELETE')

                    @csrf

                    
                    <button type="submit" class="btn btn-primary">Delete Car</button>
                </form>
                </div></div>
</div>
  @endsection