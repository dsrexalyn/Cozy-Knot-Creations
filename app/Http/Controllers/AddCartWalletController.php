<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddCartWalletController extends Controller
{
    public function addcartwalletcellphonepouch()
    {
        return view("pages/addcartwalletcellphonepouch");
    }
    public function addcartwomenfashionbagswallet()
    {
        return view("pages/addcartwomenfashionbagswallet");
    }
    public function addcartcheckeredcardholderwallet()
    {
        return view("pages/addcartcheckeredcardholderwallet");
    }
}
