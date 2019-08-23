<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoPageController extends Controller
{
    public function famous()
    {
        return view('demo');
    }
}
