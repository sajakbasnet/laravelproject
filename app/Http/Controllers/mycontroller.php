<?php

namespace App\Http\Controllers;
use FarhanWazir\GoogleMaps\GMaps;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    public function home(){
    	 return view('welcome',[
    	'offer' => 'Get 50% off when you rent a car for the first time'

    ]);
         

    }

    public function booking(){
    	 return view('booking');
    }
   public function map()
    {
        $config['center'] = 'Sydney Airport,Sydney';
        $config['zoom'] = '14';
        $config['map_height'] = '400px';
        $config['geocodeCaching'] = true;

        $gmap = new GMaps();
        $gmap->initialize($config);
     
        $marker['position'] = 'Sydney Airport,Sydney';
        $marker['infowindow_content'] = 'Sydney Airport,Sydney';
        $gmap->add_marker($marker);

        $marker['position'] = 'Kogarah Golf Club,Sydney';
        $marker['infowindow_content'] = 'Kogarah Golf Club,Sydney';
        $gmap->add_marker($marker);

        $marker['position'] = 'The Lakes Golf Club,Sydney';
        $marker['infowindow_content'] = 'The Lakes Golf Club,Sydney';
        $gmap->add_marker($marker);

        $map = $gmap->create_map();
        return view('map',compact('map'));
    }
     public function direction()
    {
        $config['center'] = 'Sydney Airport,Sydney';
        $config['zoom'] = '14';
        $config['map_height'] = '500px';
        $config['geocodeCaching'] = true;
    
        $config['directions'] = true;
        $config['directionsStart'] = 'Sydney Airport,Sydney';
        $config['directionsEnd'] = 'Kogarah Golf Club,Sydney';
        $config['directionsDivID'] =  'directionsDiv';
    
        $gmap = new GMaps();
        $gmap->initialize($config);
        $map = $gmap->create_map();
        return view('map',compact('map'));
    
    }
}
