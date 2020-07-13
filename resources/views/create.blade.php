@extends('layout')

@section('content')


				<h1 class="name" align="center">Upload car for rent</h1>
        @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   <img src="/images/{{ Session::get('path') }}" width="300" />
   @endif
     <div class="container-fluid h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col col-sm-8 col-md-8 col-lg-6 col-xl-5">
          <form method="POST" action="/cars" class="box" enctype="multipart/form-data">
	@csrf
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">Car Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="car name" name="carname">
    </div>
    <div class="form-group col-md-4">
      <label for="model">Car Model</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="model" name="model">
    </div>
     <div class="form-group col-md-4">
       <label for="inputAddress">Car Color</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="color" name="color">
    </div>
  </div>
  <div class="form-group green-border-focus">
  <label for="exampleFormControlTextarea5">Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea5" rows="3" name="description"></textarea>
</div>
   <div class="form-group">
    <label for="exampleFormControlFile1">Upload photo of your car</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  </div>
 
   <button type="submit" class="btn btn-primary">Upload Car</button>

</div>
 @include('errors')
</form>
</div></div>
</div>

          

  



@endsection