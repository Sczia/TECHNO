<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function landing (){
        return view ('APPOINTMENT.homecontents.landing');
      }

      public function appointment (){
        return view ('APPOINTMENT.homecontents.appointment');
      }


      public function contactus (){
        return view ('APPOINTMENT.homecontents.contactus');
      }

      public function login(){
        return view ('APPOINTMENT.homecontents.login');
      }

      public function register(){
        return view ('APPOINTMENT.homecontents.register');
      }
}
