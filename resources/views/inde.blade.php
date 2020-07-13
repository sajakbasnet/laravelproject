	@extends('layout')
  	@section('content')
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Montserrat=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Ma+Shan+Zheng&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text&display=swap" rel="stylesheet"> 
 

<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans&display=swap" rel="stylesheet">
	
<style>
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
  border: 4px solid #008CBA;
  border-radius: 4px;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.masthea {
  height: 50vh;
  min-height: 500px;
  background-image: url('/images/d.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;

}
.bg-tex {
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
.card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}
.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .5);
  display: table;
  transition: opacity .3s ease-out;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  width: 300px;
  margin: 0px auto;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
  transition: all .3s ease;
  font-family: Helvetica, Arial, sans-serif;
}

.modal-header h3 {
  margin-top: 0;
  color: #42b983;
}

.modal-body {
  margin: 20px 0;
  font-family: 'Ubuntu Condensed', sans-serif;
}

.modal-default-button {
  float: right;
}

/*
 * The following styles are auto-applied to elements with
 * transition="modal" when their visibility is toggled
 * by Vue.js.
 *
 * You can easily play with the modal transition by editing
 * these styles.
 */

.modal-enter {
  opacity: 0;
}

.modal-leave-active {
  opacity: 0;
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}




[v-cloak]{
  display none;
}

</style>

<header class="masthea">
<div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
 <div class="bg-tex">

 
  <h1 style="font-size:50px">Cars for Rent</h1>
 
</div>
</div>
</div>
</div>
</header>
		<div class="container">
<h2 style="text-align:center; font-family: 'Anton', sans-serif; padding-top: 30px;">Welcome to the heaven of cars</h2>
<script type="text/x-template" id="vue-modal-template">
    <transition name="modal">
        <div class="modal-mask">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-header">
                        <slot name="header">
                            This is header</slot>
                    </div>

                    <div class="modal-body">
                        <slot name="body" >
                            To book your car you have to login and if you are not member of this app then Please Sign UP!!
                        </slot>
                    </div>
                    <div class="modal-footer">
                        <slot name="footer">
<!--                             This is footer -->
                            <button class="btn btn-warn" @click="$emit('close')">close</button>
                        </slot>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</script>

<!-- demo -->
<div id="app">
    <button id="show-modal" class="button button2" @click="showModal = true" style="margin-left: 43%;margin-bottom: 10px;

    font-family: 'Kaushan Script', cursive;

">
        Booking information
    </button>
    
    <vue-modal v-if="showModal" @close="showModal = false">
        <h3 slot="header" style="font-family: 'Ubuntu Condensed', sans-serif;">Book your car</h3>

    </vue-modal>
</div>

    

<div class="card-group">

		@foreach($cars as $car)

		<div class="col-sm-3 " style="width: 300px;">
  <div class="card">
  
        
<img src="/images/{{ $car->image }}" alt="John" class="card-img-top img-fluid"/>
 
  <div class="card-body">
  <h3 style="font-family: 'PT Sans Narrow', sans-serif;"><b>{{$car->carname}}</b> </h3>
  <h4 style="font-family: 'Ubuntu Condensed', sans-serif;">Model: {{$car->model}}</h4>

  <a href="/cars/{{$car->id}}/shows"> <button class="button button2">Details</button></p></a>

</div>

</div>
</div>

 @endforeach
  </div>
</div>



	@endsection