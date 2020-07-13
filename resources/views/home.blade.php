@extends('layout')

@section('content')
<style type="text/css">
   
.mastheadsse {
  height: 50vh;
  min-height: 300px;
  background-image: url('/images/e.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;

}
.bg-texte {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
 
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 40%;
  padding-top:20px;
  text-align: center;
  font-family: 'Ma Shan Zheng', cursive;
}
</style>
<header class="mastheadsse">
<div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
 <div class="bg-texte">

 


  <h2>You are logged in! ,{{ Auth::user()->name }} </h2>
  <h1 style="font-size:50px"></h1>
  <a href="/showcar"><button class="btn btn-primary"><p> Pick a Car</p>   </button> </a> 
    
 
</div>

</div>
</div>
</div>
</header>


@endsection
