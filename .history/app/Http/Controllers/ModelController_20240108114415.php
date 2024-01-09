<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ModelController extends Controller
{
    public function getProjects(){
      $projects=Project::get();
      return view("pages.shop",["projects"=>$projects]);
    }
}
