<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public funtion index()
    {
      return view('web.index')
    }
}
