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

        return view("pages.about");
    }
 public function getPages5(){
        return view("pages.contact");
    }
}
