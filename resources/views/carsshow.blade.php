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
		.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 05);
  max-width: 300px;
  margin: auto;
  margin-top: 20px;
  text-align: center;
  font-family: arial;

}

.title {
  color: grey;
  font-size: 18px;
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
  .wrapper {
  height: 420px;
  width: 654px;
  margin: 50px auto;
  border-radius: 7px 7px 7px 7px;
  /* VIA CSS MATIC https://goo.gl/cIbnS */
  -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
}

.product-img {
  float: left;
  height: 420px;
  width: 327px;
}

.product-img img {
  border-radius: 7px 0 0 7px;
}

.product-info {
  float: left;
  height: 420px;
  width: 327px;
  border-radius: 0 7px 10px 7px;
  background-color: #ffffff;
}

.product-text {
  height: 300px;
  width: 327px;
}

.product-text h1 {
  margin: 0 0 0 38px;
  padding-top: 52px;
  font-size: 34px;
  color: #474747;
}

.product-text h1,
.product-price-btn p {
  font-family: 'Bentham', serif;
}

.product-text h2 {
  margin: 0 0 47px 38px;
  font-size: 13px;
  font-family: 'Raleway', sans-serif;
  font-weight: 400;
  text-transform: uppercase;
  color: #d2d2d2;
  letter-spacing: 0.2em;
}

.product-text p {
  height: 125px;
  margin: 0 0 0 38px;
  font-family: 'Playfair Display', serif;
  color: #8d8d8d;
  line-height: 0.7em;
  font-size: 25px;
  font-weight: lighter;
  overflow: hidden;
}

.product-price-btn {
  height: 103px;
  width: 327px;
  margin-top: 17px;
  position: relative;
}

.product-price-btn p {
  display: inline-block;
  position: absolute;
  top: -13px;
  height: 50px;
  font-family: 'Trocchi', serif;
  margin: 0 0 0 38px;
  font-size: 28px;
  font-weight: lighter;
  color: #474747;
}



.product-price-btn button {
  float: right;
  display: inline-block;
  height: 50px;
  width: 176px;
  margin: 0 40px 0 16px;
  box-sizing: border-box;
  border: transparent;
  border-radius: 60px;
  font-family: 'Raleway', sans-serif;
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.2em;
  color: #ffffff;
  background-color: #9cebd5;
  cursor: pointer;
  outline: none;
}

.product-price-btn button:hover {
  background-color: #79b0a1;
}
.color{
	 height: 100vh;
  min-height: 500px;
  background-image: url('/images/4.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
	</style>
	<div class="color">
<h1 class="name" align="center" style="color: white; font-family: 'Bentham', serif;" >Car Details</h1>

	 <div class="wrapper">
    <div class="product-img">
      <img src="/images/{{ $car->image }}"height="420" width="327">
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1>{{$car->carname}}</h1>
        <h2 style="color: black;">COLOR : {{$car->color}}</h2>
        <h2 style="color: black;">MODEL :  {{$car->model}}</h2>
        <h2 style="color: black;">Description<p> {{$car->description}} </p></h2>
      </div>
      <div class="product-price-btn">
        
        <button type="button"><a href="/cars/{{$car->id}}/edit">Edit</a></button>
      </div>
    </div>
  </div>

		</div>	
			


		
	@endsection