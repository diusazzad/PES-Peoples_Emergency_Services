<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
        return response()->json([
            "page" => "Welcome to the web ",
        ]);
    }
}
