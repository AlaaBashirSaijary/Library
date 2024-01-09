<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class PagesController extends Controller
{
    //
    public function getHome(){
        return view("pages.home");
    }
public function getblog(){

        return view("pages.blog-grid");
    }
 public function getPages5(){
        return view("pages.contact");
    }
    public function storeComment(Request $requst){
        //dd($requst);
        $comment=new Contact;
        $validated = $requst->validate([
            'email' => 'required|max:255',

        ]);
        $comment->name=$requst->name;

        $comment->email=$requst->email;
        $comment->message=$requst->message;
        $comment->save();
        return redirect("/comment");
    }
}
