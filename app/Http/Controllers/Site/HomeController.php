<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Informativo;

class HomeController extends Controller
{
  public function index(){
    return view('home');
  }
}
