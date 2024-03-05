<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    public function index(){

        try{
            $posts = Post::with('user')->select('id','user_id','title','image','created_at')->get();
            // get here all post with who user created this post with eager loading.
            // compact the post data to welcome view.
            return view('welcome', compact('posts'));
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }

    }

    public function show($id){
        try{
            $post = Post::with('user')->findOrFail($id);
            return view('view', compact('post'));
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }

    }
}
