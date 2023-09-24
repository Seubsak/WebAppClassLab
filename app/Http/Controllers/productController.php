<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\User;

class productController extends Controller
{
    public function index(){
        $emp = user::all();
        $menu = Products::all();
        return view("product", compact('menu','emp'));

    }
}
