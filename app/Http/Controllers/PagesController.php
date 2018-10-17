<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() 
	{
		//$product = Product::where('slug', 'royal-jelly')->firstOrFail();

		//$this->notification->add('success', 'Notification message', 'Notification title');

		//return view('welcome');
		return view('home');
	}   

    public function about() 
	{
		return view('about');	
	}      
}
