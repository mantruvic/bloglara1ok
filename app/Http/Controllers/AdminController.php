<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function addpost(){
        return view('admin.add_post');
    }

    public function createpost(Request $request){
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        //guaradar la imagen 
        $request ->image->move('img',$imagename);
        $post->image = $imagename;

        $post->user_name = Auth::User()->name;
        $post->user_id = Auth::User()->id;

        $post->save();

    }
}
