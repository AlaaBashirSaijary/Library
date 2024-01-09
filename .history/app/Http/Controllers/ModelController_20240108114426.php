<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ModelController extends Controller
{
    public function getProjects(){
      $projects=Project::get();
      dd();
      return view("pages.home",["projects"=>$projects]);
    }
}
