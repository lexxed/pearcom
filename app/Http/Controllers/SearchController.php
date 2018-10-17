<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class SearchController extends Controller
{
    public function search(Request $request)
    {
    	//dd($request->q);

        $url = "https://".config('constants.domainUrl').".sg/singapore/travel-packages/" . $request->q;


        //return Redirect::to($url);
        return redirect($url);

 
    	//return view('search')->with(['packages' => $packages, 'q' => $request->q,'message' => $message]);
    }   
}
