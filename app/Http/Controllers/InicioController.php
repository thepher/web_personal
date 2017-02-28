<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\View;

class InicioController extends Controller
{
    //
    public function index() {
    	
    	$frasecita = Inspiring::quote();
    	return View::make('welcome')->with(compact('frasecita'));
		
	}
}
