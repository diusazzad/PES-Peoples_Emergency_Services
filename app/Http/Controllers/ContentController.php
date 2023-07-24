<?php

namespace App\Http\Controllers;

use App\Models\content;
use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function welcome()
    {
        return view('welcome');
    }


}
