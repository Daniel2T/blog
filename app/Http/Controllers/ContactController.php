<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function boot()
    {
        return view('test/contact');
    }
}
