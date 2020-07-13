	@extends('layout')
	@section('content')
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Montserrat=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Ma+Shan+Zheng&display=swap" rel="stylesheet"> 

	



      
 
<style>

.mastheadssy {
  height: 50vh;
  min-height: 300px;
  background-image: url('/images/e.jpg');
   background-size: cover;
  background-position: center;
  background-repeat: no-repeat;

}
.imgcover {
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
  width: 80%;
  padding: 20px;
  text-align: center;
  font-family: 'Ma Shan Zheng', cursive;
}
section {
    padding-top: 4rem;
    padding-bottom: 5rem;
    background-color: #f1f4fa;
}
.wrap {
    display: flex;
    background: white;
    padding: 1rem 1rem 1rem 1rem;
    border-radius: 0.5rem;
    box-shadow: 7px 7px 30px -5px rgba(0,0,0,0.1);
    margin-bottom: 2rem;
}

.wrap:hover {
    background: linear-gradient(135deg,#6394ff 0%,#0a193b 100%);
    color: white;
}

.ico-wrap {
    margin: auto;
}

.mbr-iconfont {
    font-size: 4.5rem !important;
    color: #313131;
    margin: 1rem;
    padding-right: 1rem;
}
.vcenter {
    margin: auto;
}

.mbr-section-title3 {
    text-align: left;
}
h2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}
.display-5 {
    font-family: 'Source Sans Pro',sans-serif;
    font-size: 1.4rem;
}
.mbr-bold {
    font-weight: 700;
}

 p {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    line-height: 25px;
}
.display-6 {
    font-family: 'Source Sans Pro',sans-serif;
    font-size: 1re}
</style>
<header class="mastheadssy">
<div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
 <div class="imgcover">

 
  <h1 style="font-size:50px">About</h1>
 
</div>

</div>
</div>
</div>
</header>

<div class="container">
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="/images/f.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" style="width:450px; height:600px";>
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">Car Rental Nepal </h1><br>
      <h5 class="w3-center">Tradition since 1997</h5>
      <p class="w3-large">A primary goal of our car rental in Nepal is to achieve the highest standards of quality service without any compromise. Our objective is to continually improve the car rental services in Nepal, while offering our customers a cost effective services. Quality car rental service performance is one of the cornerstones of our company culture, and is considered a personal responsibility of all employees to maintain quality at the highest level. Our client feels our service with hassle-free experience. We offer the best price for the online booking customer. Our Price is most competitive based on “traveling with comfort”. Our drivers highly experienced and well-trained with support staff to care your baggage and required assistance. In addition we mostly select local driver because he can helps you to observe and see the local values and culture of the commitment to diversity while traveling with your family or friends or individual.
    </div>
  </div>
</div>
<section>
<div class="container">

  
    <div class="row mbr-justify-content-center">

            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-volume-up fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Stay <span>with you every step of the way </span></h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Our customer team is here to support you through your trip, wherever and whenever you need extra help.
</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-calendar fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Manage
                            <span>Your Booking online </span>
                        </h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Cancel or amend your car or dates online quickly and easily</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-globe fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">World's 
                            <span>biggest online car rental service</span>
                        </h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Working with over 900 companies in 160 countries, we can find the right car in the right place, at the right price.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-trophy fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Rated<span>by more than 3.5 million people</span></h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">We ask each of our customers to rate the company that provided their car. Check the scores - and make the right choice.</p>
                    </div>
                </div>
            </div>

            

            
        </div>

</div>
</section>




	@endsection