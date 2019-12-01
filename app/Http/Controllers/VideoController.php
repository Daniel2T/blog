<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
  public function boot()
    {
        return view('test/video');
    }
}
