<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function index(){
       DB::table('categories')->get;
        DB::select('select * from categories where active = ?', [1])
        dd($categories);
    }
}
