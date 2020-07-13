@extends('layout')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<style type="text/css">
  h2{
  text-align:center;
 
}
/* Slider */

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
#testimonials .card {
    border: 0;
}

.card {
    text-align: center;
}

.card img {
    border-radius: 50%;
    width: 100%;
    max-width: 9rem;
    max-height: 9rem;
    margin: 0 auto;
}

._tm-user-role {
    font-weight: bold;
}

._tm-header {
    padding-bottom: 5rem;
    padding-top: 5rem;
}
</style>
<script type="text/javascript">
  $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        @guest
        @if (Route::has('register'))
        <div class="bg-text">

  <h2>Where to next  </h2>
  <h1 style="font-size:50px">From One destination to another</h1>
  <p>Lets Travel, Pick a Car</p>
</div>
 @endif
                        @else
                      <div class="bg-text">

  <h2>Where to next ,{{ Auth::user()->name }} </h2>
  <h1 style="font-size:50px">From One destination to another</h1>
  <p>Lets Travel, Pick a Car</p>     
@endguest
      </div>
    </div>
  </div>
</div>
</header>
 <div  id="testimonials">
    
    <div class="container _tm-header">
      <h5 class="text-center"> Welcome To </h5>
        <h1 class="text-center">Car Rental  Nepal</h1>
    </div>
    
    <div class="container">
    <div class="row">
        <div class="col-8 col-lg-4">
            <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="/images/logo.png" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">Car Rental  Nepal  is the home for the rental car in Nepal. Your security and satisfaction is our main motto. We assure you full guarantee of 100% safe transfer of you in your designated places with maximum luxury and secured transportation.</p>
       
      </div>
    </div>
        </div>
        <div class="col-8 col-lg-4">
            <div class="card" style="width: 18rem;">
      <img class="card-img-top"src="/images/logo1.png" alt="Card image cap">
      <div class="card-body">
         <p class="card-text">Car Rental  Nepal provides rental car services in Nepal at the reasonable price with discounts and special offers. Rates of booking may differ, we provide transportation facility at any time of your need. Also, your queries will be replied as soon as we receive them.</p>
        
      </div>
    </div>
        </div>
        <div class="col-8 col-lg-4">
            <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="/images/logo2.png" alt="Card image cap">
      <div class="card-body">
       <p class="card-text">Taking care of our customer and their valuable time, we never waste time in unnecessary kinds of stuff. We pick you and drop you off from and to the objected place on time so that you can enjoy your trip and selected surrounding.</p>
       
      </div>
    </div>
        </div>
      
    </div>
</div>
</div>
</div>
</header>

<h2 align="center" style="font-family: 'Ubuntu Condensed', sans-serif;">{{$offer}}</h2>

<div class="container">


<hr/>
 <h2 style="font-family: 'Ubuntu Condensed', sans-serif;">Cars Companies</h2>
   <section class="customer-logos slider">
      <div class="slide"><img src="/images/m.jpg"></div>
      <div class="slide"><img src="/images/n.jpg"></div>
      <div class="slide"><img src="/images/o.jpg"></div>
      <div class="slide"><img src="/images/p.jpg"></div>
      <div class="slide"><img src="/images/q.jpg"></div>
      <div class="slide"><img src="/images/r.jpg"></div>
      <div class="slide"><img src="/images/s.jpg"></div>
      <div class="slide"><img src="/images/t.jpg"></div>
   
   </section>
 

@endsection