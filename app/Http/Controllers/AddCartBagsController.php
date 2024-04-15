<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddCartBagsController extends Controller
{
    public function addcarttotebag()
    {
        return view("pages/addcarttotebag");
    }
    public function addcartgrannybag()
    {
        return view("pages/addcartgrannybag");
    }
    public function addcartminibag()
    {
        return view("pages/addcartminibag");
    }
    public function addcartbodybag()
    {
        return view("pages/addcartbodybag");
    }
    public function addcartcellphonebags()
    {
        return view("pages/addcartcellphonebags");
    }
}
