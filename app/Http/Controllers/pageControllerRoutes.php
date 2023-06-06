<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageControllerRoutes extends Controller
{
   public function profile(){
    return view('content.profile');
   }

   public function about(){
    return view('content.about');
   }
   public function contact(){
    return view('content.contact');
   }
   public function vision(){
    return view('content.vision');
   }


//    dashborad
    public function admin(){
        return view('role.adminDashboard');
    }
    public function user(){
        return view('role.userDashboard');
    }

}
