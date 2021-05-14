<?php

namespace App\Http\Controllers;

use App\Events\LocationSent;
use App\LocationTracking;
use Illuminate\Http\Request;

class LocationTrackingController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        // return view('chat');
        // return response()->json(["data"=>LocationTracking::get(),"status"=>"ok"]);
        return LocationTracking::get();


    }

    public function fetchLocation()
    {
        // return response()->json(LocationTracking::get());
        return LocationTracking::get();
    }



    public function addLocation(Request $request)
    {
        $locationObj =  LocationTracking::create([
            'longi' => $request->longi,
            'lati'=>77
        ]);
        broadcast(new LocationSent($locationObj))->toOthers();
        // return response()->json(['status' => 'Location Sent!']);

        return ['status' => 'Message Sent!'];
    }
}
