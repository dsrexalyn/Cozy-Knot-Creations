<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddcartFlowersController extends Controller
{
    public function addcartlily()
    {
        return view("pages/addcartlily");
    }
    public function addcartdaisy()
    {
        return view("pages/addcartdaisy");
    }
    public function addcartsunflower()
    {
        return view("pages/addcartsunflower");
    }
    public function addcarttulipsbouquet()
    {
        return view("pages/addcarttulipsbouquet");
    }
    public function addcarttulipsanddaisybouquet()
    {
        return view("pages/addcarttulipsanddaisybouquet");
    }
    public function addcartflowerbouquet()
    {
        return view("pages/addcartflowerbouquet");
    }

}
