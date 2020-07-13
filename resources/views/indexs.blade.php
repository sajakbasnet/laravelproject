	@extends('layout')
	@section('content')
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet"> 
	 <link href="https://fonts.googleapis.com/css?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
	<style type="text/css">
		h1{
			font-family: 'Ma Shan Zheng', cursive;
			text-align: center;
		}
		.content{
			font-family: 'Bebas Neue', cursive;
			font-size: 20px;
			text-align: center;
		}
.card {
  box-shadow: 0 8px 16px 0 rgba(0, 0, 4, 5);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;

}
.title {
  color: grey;
  font-size: 18px;
}
.card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}
	</style>

	<h1>Your Cars</h1>



	<div class="container">
	<div class="card-group">

		@foreach($cars as $car)
		<div class="col-sm-3 " style="width: 300px;">
  <div class="card">
  <a href="/cars/{{$car->id}}">
    
<img src="/images/{{ $car->image }}" alt="John" class="card-img-top img-fluid"/>
 
  <div class="card-body">
  <h3 style="font-family: 'PT Sans Narrow', sans-serif;color: black;">{{$car->carname}}</h3></div>
</a>
</div>
</div>

 @endforeach
</div>
</div>
<hr>

	@endsection