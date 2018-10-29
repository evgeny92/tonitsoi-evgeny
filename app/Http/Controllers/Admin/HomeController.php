<?php

namespace App\Http\Controllers\Admin;

use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller {

   public function getHome(){
      $portfolios = Portfolio::all();
      return view('dashboard.home', compact('portfolios'));
   }
}
