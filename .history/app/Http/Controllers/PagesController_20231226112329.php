<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getPages1(){
        return view("pages.home");
    }
public function getPages4(){
        $teams=Team::get();
        return view("pages.about",["teams"=>$teams]);
    }
 public function getPages5(){
        return view("pages.contact");
    }
}
