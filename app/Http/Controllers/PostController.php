<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Artist;
use App\Models\Live;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
        {
             return view('posts.index')->with(['posts' => $post->get()]);  
        }
    public function show(Post $post)
        {
            return view('posts.show')->with(['post' => $post]);
         
        }
    // public function create()
    //     {
    //         return view('posts.create');
    //     }
    public function create(Artist $artist,Live $live)
        {
            return view('posts.create')->with(['artists' => $artist->get() , 'lives' => $live->get()]);
            
        }
    // public function create(Live $live)
    //     {
            
    //     }
    public function store(Request $request, Post $post)
        {
            $input = $request['post'];
            $input['event_id'] = 1;
            $input['user_id'] = Auth::id();
            $post->fill($input)->save();
            return redirect('/posts/' . $post->id);
        }
    
}
