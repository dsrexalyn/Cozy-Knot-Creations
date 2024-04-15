<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddCartOtherProductController extends Controller
{
    public function addcartbandana()
    {
        return view("pages/addcartbandana");
    }
    public function addcartphonecase()
    {
        return view("pages/addcartphonecase");
    }
    public function addcartheadband()
    {
        return view("pages/addcartheadband");
    }
    public function addcartcroptop()
    {
        return view("pages/addcartcroptop");
    }
    public function addcartblanket()
    {
        return view("pages/addcartblanket");
    }
    public function addcartsweater()
    {
        return view("pages/addcartsweater");
    }

}
