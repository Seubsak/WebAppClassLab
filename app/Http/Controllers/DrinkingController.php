<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drinking;
class DrinkingController extends Controller
{
public function index()
{
    $new_menu = new Drinking;
$new_menu->name = "มอคค่า";
$new_menu->type = "กาแฟสด";
$new_menu->price = 50;
$new_menu->save();
$drinkings = Drinking::all();
return view("drinking", compact('drinkings'));

}
public function createForm(){
    return view("drinking_form");
    }
    public function create(Request $request){
        $new_menu = new Drinking;
        $new_menu->name = $request->name;
        $type = "กาแฟ";
        if($request->type==2) $type = "ชา";
        $new_menu->type = $type;
        $new_menu->price = $request->price;
        $new_menu->save();
        $drinkings = Drinking::all();
        return view("drinking", compact('drinkings'));
        }
}
