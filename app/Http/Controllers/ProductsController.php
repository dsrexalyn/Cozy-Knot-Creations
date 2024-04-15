<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view("pages/products");
    }

    public function keychains()
    {
        return view("pages/keychain");
    }
    public function bags()
    {
        return view("pages/bag");
    }
    public function wallets()
    {
        return view("pages/wallet");
    }
    public function flowers()
    {
        return view("pages/flowers");
    }
    public function bandanas()
    {
        return view("pages/bandana");
    }
    public function scarfs()
    {
        return view("pages/scarfs");
    }
    public function croptops()
    {
        return view("pages/croptop");
    }
    public function sweaters()
    {
        return view("pages/sweater");
    }
    public function addcart()
    {
        return view("pages/addcart");
    }
    public function otherproducts()
    {
        return view("pages/otherproducts");
    }
    public function signin()
    {
        return view("pages/signin");
    }
}

