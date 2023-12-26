<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function index(){
        $categories=DB::table('categories')->get;
        DB::select('select * from users where active = ?', [1])
        dd($categories);
    }
}
