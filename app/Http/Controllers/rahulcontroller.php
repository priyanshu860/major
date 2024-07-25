<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rahulcontroller extends Controller
{
   public function table()
   {
      return view('table');

   }


   public function amit(){
      return view('amitview');
   }


   
public function rahul(){
   return view('rahulview');
}


   
}
    