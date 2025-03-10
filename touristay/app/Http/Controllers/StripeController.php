<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function index(Request $request){

return view("annanceDetaille");

    }
    public function checkout(){
        
    }
    public function success(){
        
    }
}
