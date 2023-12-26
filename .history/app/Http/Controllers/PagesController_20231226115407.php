<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Con;
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
    public function storeComment(Request $requst){
        //dd($requst);
        $comment=new Comment;
        $validated = $requst->validate([
            'email' => 'required|max:255',
            'name' => 'required',
        ]);
        $comment->name=$requst->name;

        $comment->email=$requst->email;
        $comment->message=$requst->message;
        $comment->save();
        return redirect("/comment");
    }
}
