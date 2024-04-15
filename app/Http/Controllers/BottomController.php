<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BottomController extends Controller
{

    public function privacypolicy()
    {
        return view("pages/privacypolicy");
    }
    public function licensing()
    {
        return view("pages/licensing");
    }
    public function termsandcondition()
    {
        return view("pages/termsandcondition");
    }
}

