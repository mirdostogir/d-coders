<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function about()

    {
        return view('layouts.frontend.pages.about');

    }
    public function contact()

    {
        return view('layouts.frontend.pages.contact');

    }
}
